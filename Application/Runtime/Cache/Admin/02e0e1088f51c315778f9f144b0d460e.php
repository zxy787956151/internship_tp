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
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo U('Product/add');?>" class="btn btn-success">导出Excel</a>
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
        <th>总价</th>
        <form action="<?php echo U('Menu/update');?>" method="post">
            <?php if(is_array($model)): foreach($model as $k=>$v): ?><tr>  
                    <td><?php echo ($k+1); ?></td> 
                    <td><?php echo ($v["name"]); ?></td>  
                    <td><?php echo ($v["photoname"]); ?></td>  
                    <td><?php echo ($v["price"]); ?></td>  
                </tr><?php endforeach; endif; ?>  
        </form>
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