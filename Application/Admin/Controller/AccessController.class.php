<?php 
namespace Admin\Controller;
use Think\Controller;
	class AccessController extends InitializeController{
		public function index(){
			//用户vs角色 => more_to_one ,※弄明白!!
			$User = D('User');
       		$user_to_role = $User->relation(true)->select();
       		$this->assign('users',$user_to_role);
			$this->display('user_index');
		}

		public function set_node(){
			$this->display();
		}
	}
 ?>