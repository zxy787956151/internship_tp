<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户结算</title>

    <!-- Bootstrap core CSS -->
    <link href="/Application/Admin/View//Public/template/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Application/Admin/View//Public/template/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View//Public/template/font-awesome/css/font-awesome.min.css">
</head>

<body>
<form action="<?php echo U('Product/excel');?>" method="post">
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <input type="submit" class="btn btn-success" name="submit" value="导出Excel" />
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
        <th>编号</th>  
        <th>商城用户名</th>  
        <th>所购物品</th>
        <th>时间</th>
        <th>总价</th>

        <?php if(is_array($checkout)): foreach($checkout as $k=>$v): ?><tr>  
                <td><?php echo ($k+1); ?></td> 
                <td><?php echo ($v["username"]); ?></td>  
                <td><?php echo ($v["prod"]); ?></td>  
                <td><?php echo ($v["time"]); ?></td>
                <td><?php echo ($v["allPrice"]); ?></td>  
            </tr>
            <input type="hidden" name="id[]" value="<?php echo ($k+1); ?>" />
            <input type="hidden" name="username[]" value="<?php echo ($v["username"]); ?>" />  
            <input type="hidden" name="prod[]" value="<?php echo ($v["prod"]); ?>" />  
            <input type="hidden" name="time[]" value="<?php echo ($v["time"]); ?>" />  
            <input type="hidden" name="allPrice[]" value="<?php echo ($v["allPrice"]); ?>" /><?php endforeach; endif; ?>  
    </table>
    <?php echo ($page); ?>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>
</form>
</body>
</html>
</body>
</html>