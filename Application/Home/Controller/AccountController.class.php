<?php 
namespace Home\Controller;
use Think\Controller;
	class AccountController extends Controller{
		public function index(){
			$this->display();
		}

		public function runLogin(){
			//与后台登录冗余,Common function.php尝试优化失败
			//都用查询尚未优化?
			if (I('submit') == 'Login') {
					//如果用户提交数据
	            $model = D("User");
	            if (!$model->create()) {
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
						        	$userId = $model->where($where)->field('user_id')->select();
						        	session('mallUserId',$userId['0']['user_id']); 
						        	$this->success("登陆成功!",U('Index/index'));
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
	}
 ?>