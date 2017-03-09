<?php 
namespace Admin\Controller;
use Think\Controller;
	class InitializeController extends Controller{
		 public function _initialize(){
		 	session_start();
	        $sid = session('username');
	        //判断用户是否登陆
	        if(!isset($sid)) {
	            redirect(U('Login/index'));
	        }
    	}
	}
 ?>
