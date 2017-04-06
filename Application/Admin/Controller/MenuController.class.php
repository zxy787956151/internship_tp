<?php 
namespace Admin\Controller;
use Think\Controller;
	class MenuController extends InitializeController{
		public function index(){
			//这个分页得自己写!!!!!!!!!!!
			if (I('type') == 'search') {
				$where['name']=array('like',"%".I('key')."%");
				$arr = M('Menu')->where($where)->select();
				$this->assign('arr',$arr);
				$this->display();
			}else{
				$User=D('Menu');  
		        $arr = $User->sel_all();
		        $this->assign('arr',$arr);  
		        $this->display();
			}
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

					if ($judge = $db->data($data)->add()) {
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
				if ($judge = $db->where("id=%d",$_GET['id'])->save($data)) {
					$this->success('修改成功!',U('Menu/index'));
				}else{
					$this->error('访问出错!');
				}
			}else{
				$this->display('Menu/update');
			}
		}

		public function delete($id){
			//这么传就是接受get传参了!
			$db = M('Menu');
			if($judge = $db->where("pid=%d",$id)->field('id')->select()){
				//是否有子类,有把子类id都查出来
				test($judge);
				foreach ($judge as $v) {
					$this->delete($v);
				}
			}else{
				if ($judge = M('Product')->where("mid=%d",$id)->field('id')->select()) {
					//此类下是否有商品
					if ($judge = M('Product')->where("mid=%d",$id)->delete()) {
						if ($judge = $db->where("id=%d",$id)->delete()) {
							$this->success('',U('Menu/index'));
							//成功确实应该什么都不处理!,否则
						}else{
							$this->error('404,页面不知道哪去了!');
						}
					}
				}else{
					if ($judge = $db->where("id=%d",$id)->delete()) {
							$this->success('',U('Menu/index'));
					}else{
							$this->error('404,页面不知道哪去了!');
					}
				}
			}
		}
	}
 ?>