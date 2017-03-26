<?php 
namespace Home\Controller;
use Think\Controller;
	class ProductController extends InitializeController{
		public function index(){
			
            $db = M('Product');  
	        $count = $db->count();// 查询满足要求的总记录数
	        
	        if (I('id') == 0) {
		        //商城主页显示最近6条商品
		        $pages = $db->limit('0,6')->order('id DESC')->select();
	        }else{
	       		$Page = new \Extend\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        	$pages = $db->limit($Page->firstRow.','.$Page->listRows)->where("mid=%d",I('id'))->order('id DESC')->select();
	        }
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
	        	$cou = M('prod_user')->where("user_id=%d and pid=%d",array($user_id,$v['id']))->field('count')->select();
	        
	        	// test($cou);
	        	$user_to_prod['user_to_prod']["$k"]['count'] = $cou['0']['count'];
	        	$user_to_prod['user_to_prod']["$k"]['price'] *=$cou['0']['count'];
	        	// $user_to_prod['user_to_prod']["$k"]['checkout'] = $cou["$user_id"]['checkout'];
	        	$allPrice += $user_to_prod['user_to_prod']["$k"]['price'];
	        	//价格为总价 不是单价
	        }
	        // test($user_to_prod['user_to_prod']);
	        $this->assign('model',$user_to_prod['user_to_prod']);
	        $this->assign('allPrice',$allPrice);
	        $this->assign('page',$show);
			$this->display();
		}

		public function add_car(){
			if ($_GET['action'] == 'ajax') {
				$db = M('prod_user');
				if ($judge = $db ->where("pid=%d and user_id=%d",array(I('id'),$_SESSION['mallUserId']))->select()) {
					if ($add = $db->where("pid=%d",I('id'))->setInc('count',I('count'))) {
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
				if ($judge = $db ->where($where)->setField(array('price','count'),array(I('price')*I('count')))) {
					$arr['success']=1;
					echo json_encode($arr);	//将数值转换成json数据存储格式
				}
			}
		}

		public function  checkout(){
			//此处结算为ajax,后期不行就改成表单提交
			$db = M('prod_user');
			$prod_user = $db->where("user_id=%d",$_SESSION['mallUserId'])->select();
			$checkout = M('checkout')->select();
			foreach ($prod_user as $k => $v) {
				$prod_user["$k"]['time'] = date("Y-m-d H:i:s",time());
				//time获取当前时间戳,date将时间戳转换格式输出
				foreach ($checkout as $cv) {
					if ($v['user_id'] == $cv['user_id']&&$v['pid']==$cv['pid']) {
						$judge["$k"]=M('checkout')->where("user_id=%d and pid=%d",array($_SESSION['mallUserId'],$v['pid']))->setInc('count',$v['count']);	
					}
				}
				if (!isset($judge["$k"])) {
					$judge["$k"] = M('Checkout')->data($prod_user["$k"])->add();
				}
			}
			foreach ($judge as $v) {
				if (!$v) {
					$arr['success'] = 0;
					echo json_encode($arr);	//将数值转换成json数据存储格式
				}
			}

			if ($judge =$db->where("user_id=%d",$_SESSION['mallUserId'])->delete()) {
				$arr['success']=1;
				$arr['allPrice'] = I('allPrice');
				echo json_encode($arr);	//将数值转换成json数据存储格式
			}
		}

		public function ajaxChange(){
			$db = M('prod_user');
			$price = M('Product')->where("id=%d",I('id'))->field('price')->select();
			if (I('get.action') == 'ajax') {
				if ($judge = $db->where("pid=%d and user_id=%d",array(I('id'),$_SESSION['mallUserId']))->setField('count',I('num'))) {
					
					$allPrice = I('num') * $price['0']['price'];
					$response = array(
						'allPrice' => $allPrice,
						'errno'  =>  '0',
						'errmsg' =>  'success',
						'data'   =>  true,
					);
					echo json_encode($response);
				}
			}

		}
	}
 ?>