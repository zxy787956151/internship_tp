<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加商品</title>

    <!-- Bootstrap core CSS -->
    <link href="/Application/Admin/View//Public/template/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Application/Admin/View//Public/template/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View//Public/template/font-awesome/css/font-awesome.min.css">
</head>

<body>
<div id="page-wrapper">
    <form method="post" action="<?php echo U('Menu/run_add');?>">
        <div class="form-group">
            <label for="aa">菜单标题</label>
            <input type="text" name="name" class="form-control" id="aa" placeholder="输入分类标题">
        </div>

        <div class="form-group">
            <label for="bb">父分类</label>
            <select name="id" id="bb" class="form-control">
                <option value="0">顶级分类</option>
                <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>  
                        <td>  
                            <option value="<?php echo ($v["id"]); ?>">
                            <?php echo str_repeat('----',$v['level']);?>
                            <?php echo ($v["name"]); ?>
                            </option>一级分类  
                        </td>  
                    </tr><?php endforeach; endif; ?>
                <!-- <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); ?> <?php echo ($v["title"]); ?></option><?php endforeach; endif; ?> -->
            </select>
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="添加" />
    </form>
</div>
<script src="/Application/Admin/View//Public/template/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/template/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/template/js/app.js"></script>

</body>
</html>
</body>
</html>