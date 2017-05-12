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
			if (I('submit')=='保存添加') {
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
	        $dfs = $User->DFS('Node');
			// test($dfs);
			$this->display();
		}

		//用户列表
		public function user(){

		}
	}
 ?>