<?php 
namespace Home\Controller;
use Think\Controller;
	class ProductController extends InitializeController{
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
	        $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where("mid=%d",I('id'))->order('id DESC')->select();
	        $this->assign('model', $pages);
	        $this->assign('page',$show);
			$this->display();
		}

		public function car(){
			//用关联模型 多对多?
			$User = D('User');
			$user_id = $_SESSION['mallUserId'];
			//用户vs商品more_to_more
			$user_to_prod = $User->relation(true)->where("user_id=%d",array($user_id))->find();
			//查询该用户所购买的商品!
	        // test($user_to_prod['user_to_prod']);
			$count = count($user_to_prod);// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,3);
	        // 实例化分页类 传入总记录数和每页显示的记录数(3)
	        $show = $Page->show();// 分页显示输出
	        //单独查一次count,未尝试优化
	        foreach ($user_to_prod['user_to_prod'] as $k=>$v) {
	        	$cou = M('prod_user')->where("user_id=%d and pid=%d",array($user_id,$v['id']))->getField('user_id,count,checkout');
	        
	        	// test($cou);
	        	$user_to_prod['user_to_prod']["$k"]['count'] = $cou["$user_id"]['count'];
	        	$user_to_prod['user_to_prod']["$k"]['price'] *=$cou["$user_id"]['count'];
	        	$user_to_prod['user_to_prod']["$k"]['checkout'] = $cou["$user_id"]['checkout'];
	        	$allPrice += $user_to_prod['user_to_prod']["$k"]['price'];
	        	//价格为总价 不是单价
	        }

	        foreach ($user_to_prod['user_to_prod'] as $k => $v) {
	        	//只显示未结算的商品
	        	if ($v['checkout']==1) {
	        		array_splice($user_to_prod['user_to_prod'],$k,1);
	        	}
	        }

	        foreach ($user_to_prod['user_to_prod'] as $k => $v) {
	        	//只显示未结算的商品
	        	if ($k==0 && $v['checkout']==1) {
	        		$user_to_prod['user_to_prod'] = null;
	        	}
	        }
	        test($user_to_prod['user_to_prod']);
	        $this->assign('model',$user_to_prod['user_to_prod']);
	        $this->assign('allPrice',$allPrice);
	        $this->assign('page',$show);
			$this->display();
		}

		public function add_car(){
			if ($_GET['action'] == 'ajax') {
				$db = M('prod_user');
				if ($pd = $db ->where("pid=%d and user_id=%d",array(I('id'),$_SESSION['mallUserId']))->select()) {
					if ($add = $db->where("pid=%d",I('id'))->setField('checkout','0')->setInc('count',I('count'))) {
						$arr['success']=1;
						$arr['count'] = I('count');
						echo json_encode($arr);	//将数值转换成json数据存储格式
					}
				}else{
					$data = array(
					'user_id' => $_SESSION['mallUserId'], //后期改掉!
					'pid' => I('id'),
					'count' => I('count')
					);
					if ($add = $db->data($data)->add()) {
						$arr['success']=1;
						$arr['count'] = I('count');
						echo json_encode($arr);	//将数值转换成json数据存储格式
					}
				}
				
			}
		}

		public function changeCar(){
			if ($_GET['action'] == 'ajax') {
				$db = M('prod_user');
				$where['pid'] = I('id');
				$where['user_id'] = $_SESSION['mallUserId'];
				//此处数组做条件 依然不好使
				if ($pd = $db ->where($where)->setField(array('price','count'),array(I('price')*I('count')))) {
					$arr['success']=1;
					echo json_encode($arr);	//将数值转换成json数据存储格式
				}
			}
		}

		public function  checkout(){
			$db = M('prod_user');
			if ($_GET['action'] == 'ajax') {
				$checkout = $db->where("user_id=%d",$_SESSION['mallUserId'])->field('checkout')->select();
				$pd = 0;
				foreach ($checkout as $v) {
					if($v['checkout']==0){
						$pd = 1;
						break;
					}
				}
				if ($pd == 0) {
						$arr['success']=2;
						echo json_encode($arr);	//将数值转换成json数据存储格式
				}else{
					if ($db->where("user_id=%d",$_SESSION['mallUserId'])->setField('checkout',1)) {
						$arr['success']=1;
						// $arr['allPrice'] = I('allPrice');
						echo json_encode($arr);	//将数值转换成json数据存储格式
					}
				}
			}
		}
	}
 ?>