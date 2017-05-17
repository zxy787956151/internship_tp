<?php
return array(
	//'配置项'=>'配置值'
	//RBAC
	'RBAC_SUPERADMIN' => 'zxy',		 		//超级管理员名称
    'ADMIN_AUTH_KEY' => 'superadmin',		//超级管理员识别
    'USER_AUTH_ON' => true,					//是否开启验证
    'USER_AUTH_TYPE' => 1,					//验证类型(1: 登录验证, 2:实时验证)
    'USER_AUTH_KEY' => 'user_id',			//用户认证识别号
    'NOT_AUTH_MODULE' => '',				//无需认证的控制器
    'NOT_AUTH_ACTION' => '',				//无需认证的动作方法
    'RBAC_ROLE_TABLE' => 'role',			//角色表名称
    'RBAC_USER_TABLE' => 'role_user',		//角色与用户的中间表名称
    'RBAC_ACCESS_TABLE' => 'access',		//权限表名称
    'RBAC_NODE_TABLE' => 'node',			//节点表名称

    //主题静态文件路径
    'TMPL_PARSE_STRING' => array(
        // '__STATIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/View/' . '/Public/static',
    	
        '__PUBLIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/View/' . '/Public',
        '__IMAGE__' => __ROOT__.'./Application/Public/Uploads',

        ),
);