<?php 
namespace Admin\Model;
use Think\Model\RelationModel;
	class RoleModel extends RelationModel{
		protected $_link = array(
        'role_to_permission' => array(
            'mapping_type' => self::MANY_TO_MANY, //多对多
            'class_name' => 'permission',
//            'mapping_name' => 'groups',
            'foreign_key' => 'role_id', //关联的外键名称??
            'relation_foreign_key' => 'perm_id', //关联表的外键名称??
            'relation_table' => 'role_perm' 
            //此处应显式定义中间表名称，且不能使用C函数读取表前缀
        ),
    );
	}
 ?>