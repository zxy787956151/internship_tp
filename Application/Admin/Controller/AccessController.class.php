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

		public function role_index(){
			$Role = D('Role');
       		$db = M('role_perm');
       		$role_to_perm = $Role->relation(true)->select();
       		//处理多对多添加节点信息进此数组
       		foreach ($role_to_perm as $rk => $rv) {
       			foreach ($rv['role_to_permission'] as $k => $v) {
       				//rv['id']为role_id,v['id']为perm_id
       				$nodename = $db->where("role_id=%d and perm_id=%d",array($rv['id'],$v['id']))->field('nodename')->select();
       				$role_to_perm["$rk"]['role_to_permission']["$k"]['nodename'] = $nodename['0']['nodename'];
       			}
       		}
       		$this->assign('role_to_perm',$role_to_perm);
			$this->display();
		}
	}
 ?>