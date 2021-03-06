<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/Application/Admin/View//Public/layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
  <style type="text/css">
    a{
      color: #01AAED;
    }
    a:hover{
      color: #c2c2c2;
    }

    body{
      background-color: #fff;
    }

    th {
      color: #F7B824;
    }

    .level0{
      color:#F7B824; font-size: 24px;
    }
    .level1{
      color:#F7B824;
      border:1px solid #f2f2f2;
      background-color:#f2f2f2; 
      height: 30px;
    }
    .level1 span{
      margin-left: 40px;
      font-size: 18px;
    }

    .level2{
      margin-left: 80px;
    }

    #all{
      padding-left: 10px;
    }
  </style>
</head>
<body>
         
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>节点列表</legend>
</fieldset>  
<br>
<div id="all">
  <button class="layui-btn" onclick="location.href='<?php echo U('Rbac/addNode',array('type'=>'app'));?>';">
      <i class="layui-icon">&#xe608;</i> 添加应用
  </button>

  <?php if(is_array($dfs)): foreach($dfs as $key=>$dv): if($dv[level] == 0): ?><br>
      <br>
      <hr>
      <span class="level0"><?php echo ($dv["name"]); ?></span>
      <a href="<?php echo U('Rbac/addNode',array('type'=>'con','pid'=>$dv[id]));?>"> [添加控制器] </a><a href="#"> [修改] </a><a href="<?php echo U('Rbac/delete');?>"> [删除] </a>
      <br>
    <?php elseif($dv[level] == 1): ?>
      <br>
      <div class="level1"><span><?php echo ($dv["name"]); ?> </span><a href="<?php echo U('Rbac/addNode',array('type'=>'fun','pid'=>$dv[id]));?>"> [添加方法] </a></div>
      <br>
    <?php else: ?> 
      <span class="level2"><?php echo ($dv["name"]); ?><a href=""> [修改] </a><a href=""> [删除] </a></span><?php endif; endforeach; endif; ?>
</div>


<script src="/Application/Admin/View//Public/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use('form', function(){
  var $ = layui.jquery, form = layui.form();
  
  //全选
  form.on('checkbox(allChoose)', function(data){
    var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
    child.each(function(index, item){
      item.checked = data.elem.checked;
    });
    form.render('checkbox');
  });
  
});
</script>

</body>
</html>