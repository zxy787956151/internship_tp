<?php 
namespace Admin\Controller;
use Think\Controller;
	class InitializeController extends Controller{
		 public function _initialize(){
		 	session_start();
	        // $sid = session('username');
	        // //判断用户是否登陆
	        // if(!isset($sid)) {
	        //     redirect(U('Login/index'));
	        // }
	        if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
	        	$this->redirect('Admin/Login/index');
	        }
	        if (C('USER_AUTH_ON')) {
	        	$RBAC = new \Extend\RBAC();
	        	// $RBAC->AccessDecision();
	        	var_dump($RBAC->AccessDecision());
	        }
    	}
	}
 ?>
