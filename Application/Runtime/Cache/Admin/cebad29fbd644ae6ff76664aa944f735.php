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
    <form method="post" action="<?php echo U('Access/add_user');?>">
        <div class="form-group">
            <label for="aa">用户名</label>
            <input type="text" name="username" class="form-control" id="aa" placeholder="输入分类标题">
        </div>

        <div class="form-group">
            <label for="aa">绑定角色</label>
            <select name="role" class="form-control">
                <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["rolename"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="aa">密码</label>
            <input type="password" name="password" class="form-control" id="aa" placeholder="输入分类标题">
        </div>
        <div class="form-group">
            <label for="aa">确认密码</label>
            <input type="password" name="repassword" class="form-control" id="aa" placeholder="输入分类标题">
        </div>

        
        <input type="submit" name="submit" value="添加" class="btn btn-default">
    </form>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>

</body>
</html>
</body>
</html>