<?php 
namespace Admin\Controller;
use Think\Controller;
	class ProductController extends InitializeController{
		public function index(){
			$db = M('Product');  
	        
	        $count  = $db->count();// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        $show = $Page->show();// 分页显示输出
	        $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id DESC')->select();
	        $this->assign('model', $pages);
	        $this->assign('page',$show);
			$this->display();
		}
	}
 ?>