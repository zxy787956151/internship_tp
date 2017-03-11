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
            <a href="<?php echo U('category/add');?>" class="btn btn-success">添加用户</a>
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
                <th>用户名</th>
                <th>所属角色</th>
                <th>密码</th>
                <th>启用|锁死</th>
                <th>上次登录时间</th>
                <th>上次登录ip</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($model)): foreach($model as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["html"]); ?> <?php echo ($v["title"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <!-- 删除角色 -->
                <td><a href="<?php echo U('category/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('category/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n删除后将不能恢复!');">删除角色</a></td>
            </tr><?php endforeach; endif; ?>
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