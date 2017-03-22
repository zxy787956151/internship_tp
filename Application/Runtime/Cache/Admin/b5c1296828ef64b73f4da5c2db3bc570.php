<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[title]</title>

    <!-- Bootstrap core CSS -->
    <link href="/Application/Admin/View//Public/template/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Application/Admin/View//Public/template/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View//Public/template/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/Application/Admin/View//Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Application/Admin/View//Public/js/ajaxRBAC.js"></script>
    <style type="text/css">
        .loading{
            width: 40px;
            height: 40px;
            display: none;
        }
    </style>
</head>

<body>
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <form>
                <input type="text" id="roleOrNode" name="roleOrNode" value="在此输入角色或权限并点击添加" />
            </form>

            <a href="javascript:;" id="addRole" class="btn btn-success" style="background-color: orange">添加角色</a>
            <a href="javascript:;" id="addPerm" class="btn btn-success" style="background-color: orange">添加权限</a>
            <br/> <br/>

        </div>
        <div class="col-md-6">
            <form action="<?php echo U('category/index');?>" method="post">
                <div class="form-group input-group">
                    <input type="text" class="form-control" name="key" placeholder="输入分类标题或者别名关键词搜索">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <h3>角色列表</h3>
    <table class="table table-hover table-striped" style="width: 500px;float: left;">
        <thead>
            <tr>
                <th>序号</th>
                <th>节点名称</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <!-- tp遍历二维数组volist比foreach好用! -->
            <?php if(is_array($role)): foreach($role as $k=>$v): ?><!-- 索引index不要用v.id,数组有被删除,用键名key -->
                <tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td>
                        <input type="text" class="roleName" name="rolename" value="<?php echo ($v["rolename"]); ?>" index="<?php echo ($k); ?>" />
                        <input type="hidden" class="roleId" name="id" value="<?php echo ($v["id"]); ?>" index="<?php echo ($k); ?>" />
                        <img src="/Application/Admin/View//Public/images/RBAC/loading.gif" class="loading" index="<?php echo ($k); ?>" />
                    </td>
                    <!-- 删除节点 -->
                    <td><a href="javascript:;" class="updateRole" index="<?php echo ($k); ?>">修改</a> | <a href="javascript:;" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n将删除与此角色关联的所有节点!!\n\n慎重!! 删除后将不能恢复!'); deleteRole('role',<?php echo $v['id']?>);">
                    删除角色</a></td>
                    <!-- ※※※记住这个传id的前端写法※※※ -->
                </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <h3 style="position:absolute;top:150px;right:810px">权限列表</h3>
    <table class="table table-hover table-striped" style="width: 500px;float: left;margin-left:100px;">
        <thead>
            <tr>
                <th>序号</th>
                <th>节点名称 (改值即可修改)</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <!-- tp遍历二维数组volist比foreach好用! -->
            <?php if(is_array($perm)): foreach($perm as $k=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td>
                        <?php
 echo "<input type='text' class='permName' name='permname' value='".$v['permname']."' onblur='updatePerm(".$v['id'].",".json_encode($v['permname']).",".$k.",".json_encode($role_to_perm).")' />"; ?>
                        <!-- <input type="text" class="permName" name="permname" value="<?php echo ($v["permname"]); ?>" onblur="updatePerm(<?php echo $v['id']?>,this.value,<?php echo $k?>,$jqAllArr)" /> -->
                    </td>
                    <!-- 删除节点 -->
                    <td><a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除权限</a></td>
                </tr><?php endforeach; endif; ?>
        </tbody>
    </table>

   
    <a href="<?php echo U('Access/add_node');?>" class="btn btn-success" style="position:relative;top:250px;right:1100px">添加节点</a>
    <h3 style="position:relative;top:250px;right:1100px">节点列表</h1>
    <table class="table table-hover table-striped" style="margin-top: 250px">
        <thead>
            <tr>
                <th>序号</th>
                <th>节点名称</th>
                <th>角色名称</th>   <!-- 实际上就是权限名 -->
                <th>权限名称</th>   <!-- 一个节点代表一个权限 -->
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <!-- tp遍历二维数组volist比foreach好用! -->
            <?php if(is_array($role_to_perm)): $rk = 0; $__LIST__ = $role_to_perm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rv): $mod = ($rk % 2 );++$rk; if(is_array($rv['role_to_permission'])): $k = 0; $__LIST__ = $rv['role_to_permission'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($rk+$k-1); ?></td>
                        <td>
                            <input type="text" class="nodeName" name="nodename" value="<?php echo ($v["nodename"]); ?>" />
                            <input type="hidden" class="nodeId" name="id" value="<?php echo ($v["id"]); ?>" />
                            <img src="/Application/Admin/View//Public/images/RBAC/loading.gif" class="loading" />
                        </td>
                        <td class="oppositeRolename"><?php echo ($rv["rolename"]); ?></td>
                        <td class="oppositePermname"><?php echo ($v["permname"]); ?></td>
                        <!-- 删除节点 -->
                        <td><a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除节点</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <?php echo ($page); ?>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>

</body>
</html>
</body>
</html>