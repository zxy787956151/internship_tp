<?php 
namespace Home\Model;
use Think\Model\RelationModel;
	class UserModel extends RelationModel{
        protected $_validate = array(
                array('username','require','请填账号！'), //默认情况下用正则进行验证
                array('password','require','请填写密码！'), //默认情况下用正则进行验证
                array('username','','用户名已存在！',0,'unique',self::MODEL_BOTH),
                array('username','/^[a-zA-Z]{3,10}+$/u','用户名必须为3到10位任意数字!',0,'regex',self::MODEL_BOTH),
                array('password','/^[\w]{6,12}$/u','密码必须为6~12位任意字母数字下划线组合!',0,'regex',self::MODEL_BOTH),
                array('repassword','password','两次密码输入不一致',0,'confirm'),
                // array('verify','require','请填写验证码！'), //默认情况下用正则进行验证
            );
        
		protected $_link = array(
        'user_to_prod' => array(
            'mapping_type' => self::MANY_TO_MANY, //多对多
            'class_name' => 'product',
//            'mapping_name' => 'groups',
            'foreign_key' => 'user_id', //关联的外键名称??
            'relation_foreign_key' => 'pid', //关联表的外键名称??
            'relation_table' => 'prod_user' 
            //此处应显式定义中间表名称，且不能使用C函数读取表前缀
        ),

    );

    public function sel_all(){  
        $arr = $this->Table('Menu')->select();  //M方法不好使,原因未测试
        return $this->list_level($arr,$pid=0,$level=0);  
    }  
    //递归遍历数据  
    public function list_level($arr,$pid=0,$level=0){  
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
 ?>