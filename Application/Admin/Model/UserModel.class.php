<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
    protected $_validate = array(
        array('username','require','请填账号！'), //默认情况下用正则进行验证
        array('password','require','请填写密码！'), //默认情况下用正则进行验证
        // array('verify','require','请填写验证码！'), //默认情况下用正则进行验证
    );
}