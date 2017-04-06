<?php 
namespace Home\Controller;
use Think\Controller;
	class InitializeController extends Controller{
		 public function _initialize(){
		 	session_start();
		 	$_SESSION['carCount'] = 0;
		 	//购物车数值
		 	
		 	// session('mallUserId',null);//注销前端商城用户的登录
	     	$User=D('User');  
	        $arr = $User->sel_all();  

	        //压缩数组
	        $tree=build_tree($arr,0);
	        $this->menu = array_slice($tree, 0, 4);
	        $this->left = array_slice($tree, 4, 7);
	        $username = $User->where("user_id=%d",$_SESSION['mallUserId'])->field('username')->select();
	        $this->carCount = $this->carCount();
	        $this->assign('username',$username['0']['username']);
	        // $this->display();
    	}

    	public function carCount(){
			$db = M('prod_user');
			$allCount = 0;
			$count = $db->where("user_id=%d",$_SESSION['mallUserId'])->field('count')->select();
			foreach ($count as $v) {
				$allCount += $v['count'];
			}
			return $allCount;
		}
	}
 ?>
