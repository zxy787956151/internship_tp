<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品管理</title>

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
            <a href="<?php echo U('Product/add');?>" class="btn btn-success">添加商品</a>
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
        <th>商品名</th>  
        <th>图片</th>
        <th>单价</th>
        <th>所属分类(菜单)</th>
        <th>操作</th>
        <form action="<?php echo U('Menu/update');?>" method="post">
            <?php if(is_array($model)): foreach($model as $k=>$v): ?><tr>  
                    <td><?php echo ($k+1); ?></td> 
                    <td><?php echo ($v["name"]); ?></td>  
                    <td><img style="width: 100px;height: 50px" src="./Application/Public/Uploads/<?php echo ($v["photourl"]); ?>/<?php echo ($v["photoname"]); ?>"></td>  
                    <td><?php echo ($v["price"]); ?></td>  
                    <td><?php echo ($v["menu"]); ?></td>
                    <!--str_repeat('字符串','重复的次数');重复一个字符串-->  
                    <td>
                    <a href="<?php echo U('Product/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('Product/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n将同时删除所有子类!');">删除</a></td> 
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