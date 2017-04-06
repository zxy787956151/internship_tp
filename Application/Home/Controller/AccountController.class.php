<?php 
namespace Home\Controller;
use Think\Controller;
	class AccountController extends InitializeController{

		public function index(){
			$this->display();
		}

		public function runLogin(){
			//与后台登录冗余,Common function.php尝试优化失败
			//都用查询尚未优化?
			$db = M('User');
			$loginVerify = array(
                array('username','require','请填账号！'), //默认情况下用正则进行验证
                array('password','require','请填写密码！'), //默认情况下用正则进行验证
            );
			if (I('submit') == '立即登录') {
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
	                			if ($role['0']['role_id'] == 3) {
	                				session_start();
	                				session_destroy('mallUserId');
						        	$userId = $model->where($where)->field('user_id')->select();
						        	session('mallUserId',$userId['0']['user_id']);
						        	//BUG!!!!!!!!!!!!!!!!!!!!!!
						        	// $judge = $db->where("user_id=%d",$userId['0']['user_id'])->setField(array('logintime','loginip'),array(date('Y-m-d H:i:s',time()),$_SERVER['SERVER_ADDR']));
						        	// var_dump($judge);
						        	if ($judge = $db->where("user_id=%d",$userId['0']['user_id'])->setField(array('logintime'=>date("Y-m-d H:i:s",time()),'loginip'=>$_SERVER["REMOTE_ADDR"]))) {
						        		//更新数据库此用户上次登录时间、ip
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

		public function register(){
			$db = M('User');
			if (I('submit') == '立即注册') {
			 	$model = D("User");
	            if (!$model->create()) {
	                // 如果创建失败 表示验证没有通过 输出错误提示信息
	                $this->error($model->getError());
	                exit();
	            }else {
	            	$data = array(
					'username' => I('username'),
					'password' => md5(I('password')),
					'role_id' => 3,
					);
					if (!($this->check_verify(I('verify','','strtolower')))) {
						$this->error('验证码错误');
					}
					if ($judge = $db->data($data)->add()) {
						$this->success('注册成功!',U('Index/index'));
					}
	            }
			}else{
				$this->display();
			}
		}

		protected function check_verify($code){
	        $verify = new \Think\Verify();
	        return $verify->check($code);
	    }

		public function verify(){
	        $Verify = new \Think\Verify();
	        $Verify->codeSet = '0123456789';
	        $Verify->fontSize = 13;
	        $Verify->length = 4;
	        $Verify->entry();
	    }
	    
	}
 ?>