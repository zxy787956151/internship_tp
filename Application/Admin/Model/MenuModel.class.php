<?php  
namespace Admin\Model;  
use Think\Model;  
class MenuModel extends Model{  
    protected $_validate = array(
        array('name','require','请填写菜单标题！'), //默认情况下用正则进行验证
    );
    //查询address表中所有数据  
    public function sel_all(){  
        $arr = $this->Table('Menu')->select();  //M方法不好使,原因未测试
        return $this->list_level($arr,$pid=0,$level=0);  
    }  
    //递归遍历数据  
    public function list_level($arr,$pid=0,$level=0){  
        //此处递归函数老刘用了个引用传值更方便, 即&$arr,有待研究!!!!!!!!!!
        //定义一个静态数组  
        static $data = array();  
        foreach($arr as $k => $v){  
            if($v['pid'] == $pid){  
                $v['level'] = $level;  
                $data[] = $v;  
                $this->list_level($arr,$v['id'],$level+1);  
            }  
        }  
        return $data;  
    }  

} 