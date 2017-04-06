<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends InitializeController {
    public function index(){
    	$db = M('Product');
    	$this->hot = $db->limit(0,8)->select();
    	$this->display();
    }
}