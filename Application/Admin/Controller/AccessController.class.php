<?php 
namespace Admin\Controller;
use Think\Controller;
	class AccessController extends InitializeController{
		public function index(){
			//用户vs角色 => more_to_one ,※弄明白!!
			$User = D('User');
       		$user_to_role = $User->relation(true)->select();
       		$this->assign('users',$user_to_role);
			$this->display();
		}

		public function node_index(){
			// $_SESSION['role_to_perm'] = null;
			// test($_SESSION['role_to_perm']);
			$Role = D('Role');
			// if (!isset($_SESSION['role_to_perm'])) {
   //     			$role_to_perm = $Role->relation(true)->select();
   //     			$role_to_perm = D('RolePerm')->makeRBAC($role_to_perm);
	  //      		session_start();
	  //      		session('role_to_perm',$role_to_perm);
			// }else{
   //     			$_SESSION['role_to_perm'] = D('RolePerm')->makeRBAC($_SESSION['role_to_perm']);
			// }
       		$role_to_perm = $Role->relation(true)->select();
       		$_SESSION['role_to_perm'] = D('RolePerm')->makeRBAC($role_to_perm);
       		// test($_SESSION['role_to_perm']);
       		$this->assign('nodeNum',1);
       		$this->assign('role_to_perm',$_SESSION['role_to_perm']);
       		$this->role = M('Role')->select();
       		$this->perm = M('Permission')->select();
			$this->display();
		}

		public function add(){
			if (I('submit') == '添加') {
				switch (I('type')) {
					case 'role':
						$name = 'rolename';
						$db = M('Role');
						break;
					case 'perm':
						$name = 'permname';
						$db = M('Permission');
						break;
				}
				$data = array(
					$name => I('name'),
					);
				if ($judge = $db->data($data)->add()) {
					$this->success('添加成功!',U('Access/index'));
				}else{
					$this->error('访问错误!');
				}
			}else{
				$this->display();
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

				$role_to_perm = D('Role')->relation(true)->select();
       			$_SESSION['role_to_perm'] = D('RolePerm')->makeRBAC($role_to_perm);
				$this->success('节点添加成功!',U('Access/index'));
			}else{
				$this->display();
			}
		}

		public function add_user(){
			$this->role = M('Role')->select();
			if (I('submit') == '添加') {
				$model = D("User");
	            if (!$model->create()) {
	                // 如果创建失败 表示验证没有通过 输出错误提示信息
	                $this->error($model->getError());
	                exit();
	            }else {
	            	$data = array(
	            		'username' => I('username'),
	            		'password' => md5(I('password')),
	            		'role_id' => I('role'),
	            		);
	            	if ($judge = M('User')->data($data)->add()) {
		            	$this->success('添加用户成功!',U('Access/index'));
	            	}
	            }
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
				$db = M('Permission');
				$i = 0;

				//解决多处需要异步修改权限名称
				$permname = $db->where("id=%d",I('id'))->field('permname')->select();
				foreach ($_SESSION['role_to_perm'] as $rk => $rv) {
				//因为使用的是数组,所以只能在数组里查 不能使用mysql模糊查询,简直不忍直视
					foreach ($rv['role_to_permission'] as $k => $v) {
						if (strpos($v['permname'],$permname['0']['permname'])!=false||$v['permname'] == $permname['0']['permname']) {
							$key["$i"]= $rk + $k;
							$value["$i"] = str_replace($permname['0']['permname'],I('content'),$v['permname']);
							$i++;
						}
					}
				}

				if ($judge = $db->where("id=%d",I('id'))->setField('permname',I('content'))) {
					$role_to_perm = D('Role')->relation(true)->select();
					$_SESSION['role_to_perm'] = D('RolePerm')->makeRBAC($role_to_perm);
					$response = array(
						'key' => $key,
						'value' => $value,
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
			$middle = M('role_perm');
			switch (I('get.type')) {
				case 'role':
					$db = M('Role');
					$id = 'role_id';
					break;
				case 'perm':
					$db = M('Permission');
					$id = 'perm_id';
					break;
				case 'node':
					$db = M('role_perm');
				case 'node_delete':
					$judge = $db->where("role_id=%d and perm_id=%d",array(I('role_id'),I('perm_id')))->delete();
					if ($judge) {
						$this->success('删除成功!');
					}
					break;
			}
			$judge1 = $db->where("id=%d",I('get.id'))->delete();
			$judge2 = $middle->where("$id=%d",I('get.id'))->delete();
			if ($judge2 || $judge1) {
				//一定是判断1或判断2,而不是反顺序
				$this->success('删除成功!');
			}
		}
	}
 ?>