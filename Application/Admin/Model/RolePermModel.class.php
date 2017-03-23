<?php  
namespace Admin\Model;  
use Think\Model;  
class RolePermModel extends Model{  
    function makeRBAC($role_to_perm){
        //处理多对多添加节点信息进此数组
        $db = M('role_perm'); 
        foreach ($role_to_perm as $rk => $rv) {
            foreach ($rv['role_to_permission'] as $k => $v) {
                //rv['id']为role_id,v['id']为perm_id
                $nodename["$k"] = $db->where("role_id=%d and perm_id=%d",array($rv['id'],$v['id']))->field('nodename')->select();
                $role_to_perm["$rk"]['role_to_permission']["$k"]['nodename'] = $nodename["$k"]['0']['nodename'];
                if ($nodename["$k"]['0']['nodename'] == $nodename["$k"-1]['0']['nodename']) {
                    define('NUM',$k-1); //此处当
                    //记录重复nodename的第一个permname
                    $role_to_perm["$rk"]['role_to_permission'][NUM]['permname'] .=" | ".$rv['role_to_permission']["$k"]['permname'];
                    unset($role_to_perm["$rk"]['role_to_permission']["$k"]);  
                }else{
                    // $role_to_perm["$rk"]['role_to_permission']["$k"]['nodename'] = $nodename["$k"]['0']['nodename'];
                }
            }
        }
        return $role_to_perm;
    }
   
} 