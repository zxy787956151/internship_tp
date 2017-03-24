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
    <script type="text/javascript" src="/Application/Admin/View//Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Application/Admin/View//Public/js/addProduct.js"></script>
</head>

<body>
<div id="page-wrapper">
    <form method="post" action="<?php echo U('Product/run_add');?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="aa">商品名</label>
            <input type="text" name="name" class="form-control" id="aa" placeholder="输入商品名">
        </div>

        <div class="form-group">
            <label for="aa">单价</label>
            <input type="text" name="price" class="form-control" id="aa" placeholder="输入单价">
        </div>

        <div class="form-group">
            <label for="bb">商品分类(菜单项)</label>
            <select name="mid" id="bb" class="form-control">
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
        <div class="form-group">
            <label for="aa">商品图片</label>
            <img src="" id="image" />
            <input type="file" name="photo" class="form-control" id="photo" value="上传图片" onchange="addProduct(this)">
            <!-- onchange在file选择完路径后执行 -->
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