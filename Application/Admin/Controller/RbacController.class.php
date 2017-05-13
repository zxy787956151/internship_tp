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
	        $this->dfs = $User->DFS('Node');
			$this->display();
		}

		public function setAccess(){
			test($_POST);
		}

		//用户列表
	}
 ?>