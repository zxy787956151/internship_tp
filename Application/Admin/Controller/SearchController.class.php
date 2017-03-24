<?php 
namespace Admin\Controller;
use Think\Controller;
	class SearchController extends Controller{
		public function index(){
			$this->redirect(I('type')."/index",array('id[]'=>1,'id[]'=>2));
		}
	}
 ?>