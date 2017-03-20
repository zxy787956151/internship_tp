<?php 
namespace Home\Controller;
use Think\Controller;
	class InitializeController extends Controller{
		 public function _initialize(){
		 	session_start();
		 	// session('mallUserId',null);//注销前端商城用户的登录
	     	$User=D('User');  
	        $arr = $User->sel_all();  

	        //压缩数组
	        $tree=build_tree($arr,0);

	        //输出用户名
	        $username = $User->where("user_id=%d",$_SESSION['mallUserId'])->field('username')->select();
	        $this->assign('username',$username['0']['username']);
	        $this->assign('arr',$tree);
	        // $this->display();
    	}
	}
 ?>
