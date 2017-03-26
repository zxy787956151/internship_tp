<?php 
namespace Admin\Controller;
use Think\Controller;
	class LoginController extends Controller{
	//这个不能继承Initialize类,循环重定向了!!
		public function index(){
			$this->display();
		}

		public function verify(){
	        $Verify = new \Think\Verify();
	        $Verify->codeSet = '0123456789';
	        $Verify->fontSize = 13;
	        $Verify->length = 4;
	        $Verify->entry();
	    }
	    protected function check_verify($code){
	        $verify = new \Think\Verify();
	        return $verify->check($code);
	    }

		public function runLogin(){

			$loginVerify = array(
	        	array('username','require','请填账号！'), //默认情况下用正则进行验证
	        	array('password','require','请填写密码！'), //默认情况下用正则进行验证
	        	// array('verify','require','请填写验证码！'), //默认情况下用正则进行验证
	    	);
			//字符串查询时可以防sql注入http://doc.thinkphp.cn/manual/sql_injection.html
			if (I('submit') == 'Login') {
					//如果用户提交数据
	            $model = D("User");
	            if (!$model->validate($loginVerify)->create()) {
	                // 如果创建失败 表示验证没有通过 输出错误提示信息
	                $this->error($model->getError());
	                exit();
	            }else {
	            	$where['username'] = I('username');
	            	//此处where("username=%s",I('username'))不好使,原因未测试
	                if ($name = $model->where($where)->select()) {
	                	$pwd = $model->where($where)->field('password')->select();
	                	//可查询多个字段
	                	if($pwd['0']['password'] == md5(I('password'))){
	                		//验证验证码是否正确
					        // if(!($this->check_verify(I('verify','','strtolower')))){
					        //     $this->error('验证码错误');
					        // }else{
	                			$role = $model->where($where)->field('role_id')->select();
	                			if ($role['0']['role_id'] == 1||$role['0']['role_id'] == 2) {
	                				if ($judge = M('User')->where($where)->setField(array('logintime'=>date("Y-m-d H:i:s",time()),'loginip'=>$_SERVER["REMOTE_ADDR"]))) {
	                				//更新最近登录time、ip
	                					session_start();
							        	$_SESSION['username'] = I('username');
							        	$this->success("登陆成功!",U('Index/index'));
	                				}
	                			}else{
	                				$this->error("您无权登录!");
	                			}
					        // }
	                	}else{
	                		$this->error("密码错误!");
	                	}
	                }else{
	                	$this->error("账号不存在!");
	                }
	            }
			}
		}

		public function loginout(){
        	session('username',null);	
        	//session_destory('username');清楚不彻底,原因未测试
        	redirect(U('Login/index'));
		}
	}
 ?>