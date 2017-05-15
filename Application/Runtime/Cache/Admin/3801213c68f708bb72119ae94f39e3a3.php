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
  <button class="layui-btn" onclick="Return();">
    <i class="layui-icon">&#x1002;</i>&nbsp;&nbsp;&nbsp;返回&nbsp;&nbsp;
  </button>

      <!-- <input type="checkbox" name="like[write]" title="写作">
      <input type="checkbox" name="like[read]" title="阅读" checked>
      <input type="checkbox" name="like[dai]" title="发呆"> -->

<form action="<?php echo U('Rbac/setAccess');?>" method="post">
<div class="layui-form-item">
<div class="layui-input-block">

  <?php if(is_array($dfs)): foreach($dfs as $key=>$dv): if($dv[level] == 0): ?><br>
      <br>
      <hr>
       <label class="level0">应用</label>
       <?php echo ($dv["name"]); ?><input type="checkbox" value="<?php echo ($dv['id']); ?>" class="level<?php echo ($dv['level']); ?> id<?php echo ($dv['id']); ?> pid<?php echo ($dv['pid']); ?>"  name="app[]" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="1" <?php if(isset($dv['checked'])){echo 'checked';} ?> />
      <br>
    <?php elseif($dv[level] == 1): ?>
      <br>
      <br>
       <label class="level1">控制器</label>
       <?php echo ($dv["name"]); ?><input type="checkbox" value="<?php echo ($dv['id']); ?>" class="level<?php echo ($dv['level']); ?> pid<?php echo ($dv['pid']); ?> id<?php echo ($dv['id']); ?>" name="con[]" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="2" <?php if(isset($dv['checked'])){echo 'checked';} ?> >
       <br>
       <br>
       <label class="level2">方法</label>
    <?php else: ?> 
       <?php echo ($dv["name"]); ?><input type="checkbox" value="<?php echo ($dv['id']); ?>" class="level<?php echo ($dv['level']); ?> pid<?php echo ($dv['pid']); ?> id<?php echo ($dv['id']); ?>" name="fun[]" title="<?php echo ($dv["name"]); ?>" value="<?php echo ($dv["id"]); ?>" level="3" <?php if(isset($dv['checked'])){echo 'checked';} ?> ><?php endif; endforeach; endif; ?>
</div>
</div>

  <div class="layui-form-item" style="text-align: center;">
    <input type="hidden" name="role_id" value="<?php echo ($_GET['id']); ?>"/>
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
  function Return(){
    location.href = "http://my.internship_tp.com/index.php?m=Admin&c=Rbac&a=role";
  }

  $(function(){
    $('.layui-form-checkbox').click(function(){
      var levelClass = $(this).prev().attr('class').substring(0,6);

      switch(levelClass){
        case 'level0':
          var firstId = $(this).prev().attr('class').substring(9,11).replace(' ','');

          $(".pid"+firstId).next().is('.layui-form-checked') ? $(".pid"+firstId).next().removeClass('layui-form-checked') : $(".pid"+firstId).next().addClass('layui-form-checked');

          var secondIdCount = $(".pid"+firstId);
          for (var i = 0; i <secondIdCount.length; i++) {
            var secondId = $(".pid"+firstId+":eq("+i+")").attr('class').substring(12,17).replace(' ','');
            
            $array = array('i','d');
            secondId = str_replace($array,"",secondId);//字符串替换
            alert(secondId);

            $(".pid"+secondId).next().is('.layui-form-checked') ? $(".pid"+secondId).next().removeClass('layui-form-checked') : $(".pid"+secondId).next().addClass('layui-form-checked');
          }
        break;

        case 'level1':
          var secondId = $(this).prev().attr('class').substring(14,16).replace(' ','');

          $(this).is('.layui-form-checked') ? $(".pid"+secondId).next().removeClass('layui-form-checked') : $(".pid"+secondId).next().addClass('layui-form-checked');

           $(this).is('.layui-form-checked') ? $(this).removeClass('layui-form-checked') : $(this).addClass('layui-form-checked');
        break;

        case 'level2':
        
        break;
      }
      // var inputs = $(this).parents('.layui-input-block').find('input');
      
    })
  })
</script>

</body>
</html>