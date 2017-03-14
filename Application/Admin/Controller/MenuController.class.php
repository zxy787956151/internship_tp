<?php 
namespace Admin\Controller;
use Think\Controller;
	class MenuController extends InitializeController{
		public function index(){
			//实例化model  
	        $User=D('Menu');  
	        $arr = $User->sel_all();  
	        //print_r($arr);die;
	        $this->assign('arr',$arr);  
	        $this->display();
		}

		public function add(){
			$User=D('Menu');  
	        $arr = $User->sel_all();  
	        //print_r($arr);die;
	        $this->assign('arr',$arr);
			$this->display();
		}

		public function run_add(){
			if (I('submit') == '添加') {
	            $model = D("Menu");
	            if (!$model->create()) {
	                // 如果创建失败 表示验证没有通过 输出错误提示信息
	                $this->error($model->getError());
	                exit();
	            }else{
	            	$db = M('Menu');
	            	$classify = $db->where("id=%d",I('id'))->field('pid','level')->select();
					if (I('id')==0) {
						$data = array(
							'name' => I('name'),
							'level' =>1,
							'pid' =>0
						);
					}else{
						$data = array(
							'name' => I('name'),
							'level' => $classify['0']['level']+1,
							'pid' => $classify['0']['id']
						);
					}

					if ($pd = $db->data($data)->add()) {
						$this->success('添加成功!',U('Menu/index'));
					}else{
						$this->error('访问出错!');
					}
	            }
			}
		}

		public function update(){
			$db = M('Menu');
			//I函数给接受POST和GET两者的传递
			$classify = $db->where("id=%d",I('id'))->field('name')->select();
			$this->assign('name',$classify['0']['name']);
			if (I('submit') == '修改') {
				$data = array(
					'name' => I('name'),
					);
				if ($pd = $db->where("id=%d",$_GET['id'])->save($data)) {
					$this->success('修改成功!',U('Menu/index'));
				}else{
					$this->error('访问出错!');
				}
			}else{
				$this->display('Menu/update');
			}
		}

		public function delete(){
			$db = M('Menu');
			if (M('Product')->where("mid=%d",I('id'))->delete()&&$db->where("pid=%d",I('id'))->delete()&&$db->where("id=%d",I('id'))->delete()) {
				//三个且连用出错,未搞定!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				$this->success('删除成功!');
			}else{
				$this->error('访问错误!');
			}
		}
	}
 ?>