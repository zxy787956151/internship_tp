<?php 
namespace Home\Controller;
use Think\Controller;
	class ProductController extends Controller{
		public function index(){
			$this->PageNow = M('Product')->select();
			$this->display();
		}
	}
 ?>