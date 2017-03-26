<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菜单管理</title>

    <!-- Bootstrap core CSS -->
    <link href="/Application/Admin/View//Public/template/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Application/Admin/View//Public/template/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View//Public/template/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/Application/Admin/View//Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Application/Admin/View//Public/js/search.js"></script>
</head>

<body>
<div id="page-wrapper">
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo U('Menu/add');?>" class="btn btn-success">新增菜单</a>
        </div>
        <div class="col-md-6">
            <form action="<?php echo U('Menu/index');?>" method="post">
                <div class="form-group input-group">
                    <input type="hidden" id="type" name="type" value="search">
                    <input type="text" id="key" class="form-control" name="key" placeholder="输入分类标题或者别名关键词搜索">
                    <span class="input-group-btn">
                      <button id="search" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover table-striped">
        <th>编号</th>  
        <th>菜单名</th>  
        <th>操作</th>
        <form action="<?php echo U('Menu/update');?>" method="post">
            <?php if(is_array($arr)): foreach($arr as $k=>$v): ?><tr>  
                    <td><?php echo ($k+1); ?></td>  
                    <!--str_repeat('字符串','重复的次数');重复一个字符串-->  
                    <td><?php echo str_repeat('----',$v['level']); echo ($v["name"]); ?></td>  
                    <td>
                    <a href="<?php echo U('Menu/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('Menu/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('您真的确定要删除吗？\n\n将同时删除所有子类!\n\n及此类下所有商品!!!');">删除</a></td> 
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