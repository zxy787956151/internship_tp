<?php 
	namespace Home\Controller;
	use Think\Controller;

	Class SingleController extends InitializeController{
		Public function index(){
			$db = M('Product');
			$this->pro=$db->where("id=%d",I('pid'))->select();
			$this->display();
		}
	}
 ?>