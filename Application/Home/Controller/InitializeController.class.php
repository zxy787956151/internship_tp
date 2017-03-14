<?php 
namespace Home\Controller;
use Think\Controller;
	class InitializeController extends Controller{
		 public function _initialize(){
		 	session_start();
	     	$User=D('User');  
	        $arr = $User->sel_all();  

	        //压缩数组
	        $tree=build_tree($arr,0);
	        // test($tree);
	        // arr_foreach($tree);
	        // die();
	        $this->assign('arr',$tree);
	        // $this->display();
    	}
	}
 ?>
