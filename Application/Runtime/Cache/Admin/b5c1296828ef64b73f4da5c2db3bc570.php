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
            <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["rolename"]); ?></td>
                    <!-- 删除节点 -->
                    <td><a href="<?php echo U('category/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除节点</a></td>
                </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <h3 style="position:absolute;top:150px;right:810px">权限列表</h3>
    <table class="table table-hover table-striped" style="width: 500px;float: left;margin-left:100px;">
        <thead>
            <tr>
                <th>序号</th>
                <th>节点名称</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <!-- tp遍历二维数组volist比foreach好用! -->
            <?php if(is_array($perm)): foreach($perm as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["permname"]); ?></td>
                    <!-- 删除节点 -->
                    <td><a href="<?php echo U('category/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除节点</a></td>
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
                        <td><?php echo ($v["nodename"]); ?></td>
                        <td><?php echo ($rv["rolename"]); ?></td>
                        <td><?php echo ($v["permname"]); ?></td>
                        <!-- 删除节点 -->
                        <td><a href="<?php echo U('category/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除节点</a></td>
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