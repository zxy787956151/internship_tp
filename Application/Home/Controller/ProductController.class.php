<?php 
namespace Home\Controller;
use Think\Controller;
	class ProductController extends Controller{
		public function index(){
			// $data = array(
			// 	'username'=>'xzf',
			// 	'password' => md5("xzf"),
			// 	'logintime' =>  date('y-m-d h:i:s',time()),
			// 	'loginip' =>  $_SERVER["REMOTE_ADDR"],
			// 	'role_id' =>'3',
			// 	);
			// if ($pd = M('user')->data($data)->add()) {
			// 	$this->success('ok');
			// }
			// die();
            $db = M('Product');  
	        
	        $count  = $db->count();// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        $show = $Page->show();// 分页显示输出
	        $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id DESC')->select();
	        $this->assign('model', $pages);
	        $this->assign('page',$show);
			$this->display();
		}

		public function car(){
			//用关联模型 多对多?
			// $db = M('prod_user');
			// $count  = $db->count();// 查询满足要求的总记录数
	  //       $Page = new \Extend\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	  //       $show = $Page->show();// 分页显示输出
	  //       $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id DESC')->select();
			$User = D('User');
			//用户vs商品more_to_more
			$user_to_prod = $User->relation(true)->where("user_id=%d",'19')->find();
	        test($user_to_prod);
	        // $this->assign('model', $pages);
	        // $this->assign('page',$show);
			$this->display();
		}

		public function add_car(){
			session_start();
			$arr['success']=1;
			$arr['prod_id'] = $_GET['id'];
			echo json_encode($arr);
			die();
			if ($_GET['action'] == 'ajax') {
				$db = M('prod_user');
				if ($pd = $db ->where("prod_id=%d",I('id'))->select()) {
					if ($add = $db->where("prod_id=%d",I('id'))->setInc('count',1)) {
						//购物车里此用户这件商品数量加1
						$arr['success']=1;
						echo json_encode($arr);	//将数值转换成json数据存储格式
					}
				}else{
					$data = array(
					'user_id' => 1, //后期改掉!
					'prod_id' => I('id'),
					'count' => 1
					);
					if ($add = $db->where("prod_id=%d",I('id'))->add($data)) {
						$arr['success']=1;
						echo json_encode($arr);	//将数值转换成json数据存储格式
					}
				}
				
			}
		}
	}
 ?>