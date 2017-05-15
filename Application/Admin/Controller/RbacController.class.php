<?php 
namespace Admin\Controller;
use Think\Controller;
	class RbacController extends InitializeController{
		public function index(){

		}

		public function role(){
			$this->role = M('Role')->select();
			$this->display();
		}

		public function addRole(){
			if (I('submit')=='保存添加') {
				if (M('Role')->add($_POST)) {
					$this->success('添加成功!',U('Rbac/role'));
				}else{
					$this->error('添加失败!');
				}
			}else{
				$this->display();
			}
		}

		public function addNode(){
			$type = I('get.type');
			switch ($type) {
				case 'app':
					$this->type = '应用';
					break;

				case 'con':
					$this->type = '控制器';
					break;

				case 'fun':
					$this->type = '方法';
					break;
			}

			if (I('submit')=='保存添加') {
				//sort字段构思不出用法 暂时取消添加sort
				switch (I('type')) {
					case 'app':
						$_POST['level'] = 1;
						$_POST['pid'] = 0;
						break;

					case 'con':
						$_POST['level'] = 2;
						$_POST['pid'] = I('pid');
						break;

					case 'fun':
						$_POST['level'] = 3;
						$_POST['pid'] = I('pid');
						break;
				}
				if (M('Node')->add($_POST)) {
					$this->success('添加成功!',U('Rbac/node'));
				}else{
					$this->error('添加失败!');
				}
				
			}else{
				$this->display();
			}
		}

		public function node(){
			$User=D('Menu');  
	        $this->dfs = $User->DFS('Node');
			// test($this->$dfs);
			$this->display();
		}

		public function permission(){
			$User=D('Menu');  
			$db = M('Access');
	        $dfs = $User->DFS('Node');
	        $acc = $db->where("role_id=%d",I('get.id'))->select();
	        foreach ($acc as $av) {
	        	foreach ($dfs as $dk => $dv) {
	        		if ($dv['id'] == $av['node_id']) {
	        			$dfs["$dk"]['checked'] = 1;
	        		}
	        	}
	        }
	        $this->assign('dfs',$dfs);
			$this->display();
		}

		public function setAccess(){
			$db = M('Access');
			foreach ($_POST as $pk => $pv) {
				switch ($pk) {
					case 'app':
						$level = 0;
						foreach ($pv as $v) {
							$data[] = array(
								'role_id' => I('role_id'),
								'node_id' => $v,
								'level' => $level,
							);
						}
						break;

					case 'con':
						$level = 1;
						foreach ($pv as $v) {
							$data[] = array(
								'role_id' => I('role_id'),
								'node_id' => $v,
								'level' => $level,
							);
						}
						break;

					case 'fun':
						$level = 2;
						foreach ($pv as $v) {
							$data[] = array(
								'role_id' => I('role_id'),
								'node_id' => $v,
								'level' => $level,
							);
						}
						break;
				}
			}

			if ($judge1 = $db->where("role_id=%d",I('role_id'))->delete() && $judge2 = $db->addAll($data)) {
				$this->success('配置成功!');
			}
			
		}
	}
 ?>