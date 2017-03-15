<?php 
namespace Admin\Controller;
use Think\Controller;
	class ProductController extends InitializeController{
		public function index(){
			$db = M('Product');  
	        
	        $count  = $db->count();// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        $show = $Page->show();// 分页显示输出
	        $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
	        foreach ($pages as $k => $v) {
	        	$menu = M('Menu')->where("id=%d",$v['mid'])->field('name')->select();
	        	$pages["$k"]['menu'] = $menu['0']['name'];
	        }
	        $this->assign('model', $pages);
	        $this->assign('page',$show);
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
				$data  = array(
					'name' => I('name'),
					'price' => I('price'),
					'mid' => I('mid')
				);
				if ($pd = M('Product')->data($data)->add()) {
					$this->success('添加成功!',U('Product/index'));
				}else{
					$this->error('访问错误!');
				}
			}
		}

		public function delete(){
			$db = M('Product');
			if ($db->where("id=%d",I('id'))->delete()) {
				$this->success('删除成功!');
			}else{
				$this->error('访问错误!');
			}
		}

		public function checkout(){
			//这么复杂,未优化!!!!,这么多foreach!!
			$db = M('prod_user');
			$user = M('user');
			$userId = $user->select();
			foreach ($userId as $v) {
				$checkout = $db->where("user_id=%d",$v['user_id'])->select();
				foreach ($checkout as $v) {
					if ($v['checkout'] == 1) {
						$checUseId[] = $v['user_id'];
						break;
					}
				}
			}
			foreach ($checUseId as $v) {
				$cheUseAll[] = $db->where("user_id=%d",$v)->select();
			}
			
			foreach ($cheUseAll as $allK=>$allV) {
				foreach ($allV as $k=>$v) {
					$name = M('Product')->where("id=%d",$v['pid'])->field('name','price')->select();
					//select都能忘!!
					$cheUseAll["$allK"]["$k"]['name'] = $name['0']['name']; 
					$cheUseAll["$allK"]["$k"]['price'] = $name['0']['price']; 
					//处理用户结算数组
					$prodName += $v['name']."*".$v['count']." ";
					// $allPrice += $v
				}
				//处理用户结算数组	
				$result[]['user_id']['name'] = $prodName;  	
			}
			test($cheUseAll);
			$this->display();
		}
	}
 ?>