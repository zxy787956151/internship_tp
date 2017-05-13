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
  <script src="/Application/Admin/View//Public/js/jquery.js"></script>
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
      margin-left: 40px;
      font-size: 18px;
      height: 30px;
    }
    .level2{
      margin-left: 100px;
    }


    #all{
      padding-left: 10px;
    }

  </style>
</head>
<body>
         
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>配置权限</legend>
</fieldset>  
<br>
<div id="all">
  <button class="layui-btn">
    <i class="layui-icon">&#x1002;</i>&nbsp;&nbsp;&nbsp;返回&nbsp;&nbsp;
  </button>

      <!-- <input type="checkbox" name="like[write]" title="写作">
      <input type="checkbox" name="like[read]" title="阅读" checked>
      <input type="checkbox" name="like[dai]" title="发呆"> -->

<form class="layui-form" action="<?php echo U('Rbac/setAccess');?>" method="post">
<div class="layui-form-item">
<div class="layui-input-block">

  <?php if(is_array($dfs)): foreach($dfs as $key=>$dv): if($dv[level] == 0): ?><br>
      <br>
      <hr>
       <label class="level0">应用</label>
       <input type="checkbox" class="change" name="app" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="1">
      <br>
    <?php elseif($dv[level] == 1): ?>
      <br>
      <br>
       <label class="level1">控制器</label>
       <input type="checkbox" name="con" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="2">
       <br>
       <br>
       <label class="level2">方法</label>
    <?php else: ?> 
       <input type="checkbox" name="fun" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="3"><?php endif; endforeach; endif; ?>
</div>
</div>

  <div class="layui-form-item" style="text-align: center;">
    <input type="submit" class="layui-btn" name="submit" value="保存修改" lay-submit="" lay-filter="demo2">
  </div>

</form>
</div>


<script src="/Application/Admin/View//Public/layui/lay/dest/layui.all.js" charset="utf-8"></script>
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

<script type="text/javascript">
  $(function(){
    $('.layui-form-checkbox').click(function(){
      alert('1');
      // var inputs = $(this).parents('.layui-input-block').find('input');
      $(".change").attr('checked','checked');
    })
  })
</script>

</body>
</html>