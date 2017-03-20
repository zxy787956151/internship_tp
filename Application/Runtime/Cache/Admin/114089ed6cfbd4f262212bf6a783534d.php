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
</head>

<body>
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo U('Access/set_node');?>" class="btn btn-success">添加角色</a>
            <a href="<?php echo U('Access/set_node');?>" class="btn btn-success">添加节点</a>
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
    <table class="table table-hover table-striped">
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