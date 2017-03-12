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
			$User = D('User');
			//用户vs商品more_to_more
			$user_to_prod = $User->relation(true)->where("user_id=%d",$_SESSION['mallUserId'])->find();
	        // test($user_to_prod['user_to_prod']);
			$count = count($user_to_prod);// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,3);
	        // 实例化分页类 传入总记录数和每页显示的记录数(3)
	        $show = $Page->show();// 分页显示输出
	        //单独查一次count,未尝试优化
	        foreach ($user_to_prod['user_to_prod'] as $k=>$v) {
	        	$cou = M('prod_user')->where("user_id=%d and pid=%d",array($_SESSION['mallUserId'],$v['id']))->field('count')->select();
	        	$user_to_prod['user_to_prod']["$k"]['count'] = $cou['0']['count'];
	        	$user_to_prod['user_to_prod']["$k"]['price'] *=$cou['0']['count']; 
	        	//价格为总价 不是单价
	        }
	        $this->assign('model',$user_to_prod['user_to_prod']);
	        $this->assign('page',$show);
			$this->display();
		}

		public function add_car(){
			if ($_GET['action'] == 'ajax') {
				$db = M('prod_user');
				if ($pd = $db ->where("pid=%d",I('id'))->select()) {
					if ($add = $db->where("pid=%d",I('id'))->setInc('count',I('count'))) {
						//购物车里此用户这件商品数量加1
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
					if ($add = $db->where("pid=%d",I('id'))->add($data)) {
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
					//购物车里此用户这件商品数量加1
					$arr['success']=1;
					echo json_encode($arr);	//将数值转换成json数据存储格式
				}
			}
		}
	}
 ?>