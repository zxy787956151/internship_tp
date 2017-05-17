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

        <div class="form-group clone_Container" style="float: left;">
            <label for="aa" style="float: left;">绑定角色</label>
            <select name="role[]" class="form-control clone" style="width: 100px;margin-left: 10px;float: left;">
                <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v["role_id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <input type="button" style="margin-left: 10px;" name="submit" value="添加一个角色" class="btn btn-default add_user">
        <br>
        <br>
        <div class="form-group">
            <label for="aa" style="">密码</label>
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
<script type="text/javascript">
    
    $(function(){
        $('.add_user').click(function(){
            var clone = $('.clone:eq(0)').clone();
            $('.clone_Container').append(clone);
        })    
    })
</script>
</body>
</html>
</body>
</html>