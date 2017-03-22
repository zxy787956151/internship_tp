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

		public function node_index(){
			$Role = D('Role');
       		$db = M('role_perm');
       		$role_to_perm = $Role->relation(true)->select();
       		//处理多对多添加节点信息进此数组
       		foreach ($role_to_perm as $rk => $rv) {
       			foreach ($rv['role_to_permission'] as $k => $v) {
       				//rv['id']为role_id,v['id']为perm_id
       				$nodename["$k"] = $db->where("role_id=%d and perm_id=%d",array($rv['id'],$v['id']))->field('nodename')->select();
       				$role_to_perm["$rk"]['role_to_permission']["$k"]['nodename'] = $nodename["$k"]['0']['nodename'];
       				if ($nodename["$k"]['0']['nodename'] == $nodename["$k"-1]['0']['nodename']) {
       					define('NUM',$k-1);	//此处当
       					//记录重复nodename的第一个permname
       					$role_to_perm["$rk"]['role_to_permission'][NUM]['permname'] .=" | ".$rv['role_to_permission']["$k"]['permname'];
       					unset($role_to_perm["$rk"]['role_to_permission']["$k"]);  
       				}else{
       					// $role_to_perm["$rk"]['role_to_permission']["$k"]['nodename'] = $nodename["$k"]['0']['nodename'];
       				}
       			}
       		}
       		$this->assign('role_to_perm',$role_to_perm);
       		$this->role = M('Role')->select();
       		$this->perm = M('Permission')->select();
			$this->display();
		}

		public function add_role(){
			if (I('get.action') == 'ajax') {
				$data = array('rolename' => I('content'));
				if ($judge = M('Role')->data($data)->add()) {
					$arr['success']=1;
					$arr['rolename'] = I('content');
					echo json_encode($arr);	//将数值转换成json数据存储格式	
				}
			}
		}

		public function add_perm(){
			if (I('get.action') == 'ajax') {
				$data = array('permname' => I('content'));
				if ($judge = M('Permission')->data($data)->add()) {
					$arr['success']=1;
					$arr['rolename'] = I('content');
					echo json_encode($arr);	//将数值转换成json数据存储格式	
				}
			}
		}

		public function add_node(){
			//链式写法
			$this->role = M('role')->select();
			$this->perm = M('permission')->select();
			if (I('post.submit') == '添加') {
				foreach (I('permission') as $v) {
					//这里使RBAC角色与权限多对多,即中间表要多条存一个角色的多个权限
					$data = array(
						'nodename' => I('nodename'),
						'perm_id' => $v,
						'role_id' => I('role')
						);
					
					$judge[] = M('role_perm')->data($data)->add();
				}

				//多选权限有任意一个未成功 均报错!
				foreach ($judge as $pv) {
					foreach ($pv as $v) {
						if (!$v) {
							$this->error('访问错误!');
						}	
					}
				}
				$this->success('节点添加成功!',U('Access/node_index'));
			}else{
				$this->display();
			}
		}

		public function update_role(){
			//解决这个实时修改完,另一个也要实时刷新
			if (I('get.action') == 'ajax') {
				if ($judge = M('Role')->where("id=%d",I('id'))->setField('rolename',I('rolename'))) {
					$arr['success']=1;
					$arr['rolename'] = I('rolename');
					echo json_encode($arr);	//将数值转换成json数据存储格式	
				}else{
					$arr['success']=0;
					echo json_encode($arr);	//将数值转换成json数据存储格式	
				}
			}
		}

		public function update_perm(){
			if (I('get.action') == 'ajax') {
				if ($judge = M('Permission')->where("id=%d",I('id'))->setField('permname',I('content'))) {
					$response = array(
						'permname' => I('content'),
						'errno'  =>  '0',
						'errmsg' =>  'success',
						'data'   =>  true,
					);
					echo json_encode($response);
				}
			}
		}

		public function delete(){
			test($_GET);
			switch (I('get.type')) {
				case 'role':
					$db = M('Role');
					break;
			}
			
			$judge1 = $db->where("id=%d",I('get.id'))->delete();
			$judge2 = M('role_perm')->where("role_id=%d",I('get.id'))->delete();
			if ($judge1 && $judge2) {
				
			}
		}
	}
 ?>