<?php 
namespace Admin\Controller;
use Think\Controller;
	class ProductController extends InitializeController{
		public function index(){
			$db = M('Product');  
	        
	        $count  = $db->count();// 查询满足要求的总记录数
	        $Page = new \Extend\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	        $show = $Page->show();// 分页显示输出
	        $pages = $db->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
	        foreach ($pages as $k => $v) {
	        	$menu = M('Menu')->where("id=%d",$v['mid'])->field('name')->select();
	        	$pages["$k"]['menu'] = $menu['0']['name'];
	        }
	        $this->assign('model', $pages);
	        $this->assign('page',$show);
			$this->display();
		}

		public function add(){
			$User=D('Menu');  
	        $arr = $User->sel_all();  
	        //print_r($arr);die;
	        $this->assign('arr',$arr);  
	        $this->display();
		}

		public function run_add(){
			if (I('submit') == '添加') {
				$data  = array(
					'name' => I('name'),
					'price' => I('price'),
					'mid' => I('mid')
				);
				if ($judge = M('Product')->data($data)->add()) {
					$this->success('添加成功!',U('Product/index'));
				}else{
					$this->error('访问错误!');
				}
			}
		}

		public function delete(){
			$db = M('Product');
			if ($db->where("id=%d",I('id'))->delete()) {
				$this->success('删除成功!');
			}else{
				$this->error('访问错误!');
			}
		}

		public function checkout(){
			$db = M('checkout');
			$uDb = M('user');
			$proDb = M('Product');
			$checkout = $db->select();
			$group = array();
			$i = 0;
			// test($checkout);
			// die();
			//手动对用户进行分组,未尝试优化
			foreach ($checkout as $ck=>$cv) {
				$judge = 1;
				foreach ($group as $v) {
					foreach ($v as $gv) {
						if ($cv['user_id']==$gv['user_id']) {
							$judge = 0;
						}
					}
				}
				if ($judge) {
					$group[] = $db->where("user_id=%d",$cv['user_id'])->select();		
					$username = $uDb->where("user_id=%d",$cv['user_id'])->field('username')->select();
					$pidCou = $db->where("user_id=%d",$cv['user_id'])->field('pid,count,time')->select();
					$result[]['username'] = $username['0']['username'];

					foreach ($pidCou as $v) {
						$prod = $proDb->where("id=%d",$v['pid'])->field('name,price')->select();
						$result["$i"]['prod'] .= " ".$prod['0']['name']."*".$v['count'];
						$result["$i"]['allPrice'] += $prod['0']['price']*$v['count'];
						$result["$i"]['time'] = $v['time'];
					}
					$i++;
				}
			}
			$this->assign('checkout',$result);
			$this->display();
		}

		public function excel(){
			$data = array(array(编号, 商城用户名, 所购物品, 时间, 总价));
            for ($i=0 ; $i<count(I('id')) ; $i++) { 
            	$data["$i+1"]['0'] = I('id')["$i"];
            	$data["$i+1"]['1'] = I('username')["$i"];
            	$data["$i+1"]['2'] = I('prod')["$i"];
            	$data["$i+1"]['3'] = I('time')["$i"];
            	$data["$i+1"]['4'] = I('allPrice')["$i"];
            }

	    	create_xls($data);
			}
	}
 ?>