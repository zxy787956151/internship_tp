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
        <a href="<?php echo U('Access/add_access');?>" class="btn btn-success">添加新权限</a>
    </div>
    <form method="post" action="<?php echo U('category/add');?>">

        <div class="form-group">
            <label for="aa">节点名</label> <!-- 没用 -->
            <input type="text" name="title" class="form-control" id="aa" placeholder="输入分类标题">
        </div>
        <div class="form-group">
            <label for="bb">角色</label>
            <select name="pid" id="bb" class="form-control">
                <option value="">船长</option>
                <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); ?> <?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="bb">权限设置</label>
            access1<input type="checkbox" value="access1" name="access" />
            access2<input type="checkbox" value="access2" name="access" />
            access3<input type="checkbox" value="access3" name="access" />
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>

</body>
</html>
</body>
</html>