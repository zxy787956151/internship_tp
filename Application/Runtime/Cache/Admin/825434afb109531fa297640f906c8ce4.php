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
    </div>
    <form method="post" action="<?php echo U('Access/add_node');?>">

        <div class="form-group">
            <label for="aa">节点名</label> <!-- 没用 -->
            <input type="text" name="nodename" class="form-control" id="aa" placeholder="输入分类标题">
        </div>
        <div class="form-group">
            <label for="bb">选择角色</label>
            <select name="role" id="bb" class="form-control">
                <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["rolename"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="bb">选择权限</label>
            <?php if(is_array($perm)): foreach($perm as $key=>$v): ?><input type="checkbox" value="<?php echo ($v["id"]); ?>" name="permission[]" style="margin-left: 20px;" /><?php echo ($v["permname"]); endforeach; endif; ?>
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="添加">
    </form>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>

</body>
</html>
</body>
</html>