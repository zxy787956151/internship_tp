<?php 
namespace Admin\Controller;
use Think\Controller;
	class SearchController extends Controller{
		public function index(){
			if (I('get.action') == 'search') {
				switch (I('get.type')) {
					case 'Menu':
						$db = M('Menu');
						$where['name']=array('like',"%".I('key')."%");
						break;
				}
				$name = $db->where($where)->select();
				$this->redirect(I('type')."/index");

				$response = array(
					'key' => I('get.key'),
					'errno'  =>  '0',
					'errmsg' =>  'success',
					'data'   =>  true,
				);
				echo json_encode($response);
				//※※此句后不能有任何语句执行,否则不异步※※
			}
		}
	}
 ?>