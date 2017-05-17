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
    #all{
      padding-left: 10px
    }
  </style>
</head>
<body>
         
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>角色列表</legend>
</fieldset>  
<br>

<div id="all">
  <button class="layui-btn" onclick="location.href='<?php echo U('Rbac/addRole');?>';">
      <i class="layui-icon">&#xe608;</i> 添加角色
  </button>
  <br>
  <br>
  <table class="layui-table" lay-even="" lay-skin="nob">
    <colgroup>
      <col width="150">
      <col width="150">
      <col width="200">
      <col>
    </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>角色名称</th>
        <th>角色描述</th>
        <th>开启状态</th>
        <th>操作</th>
      </tr> 
    </thead>
    <tbody>

      <?php if(is_array($role)): foreach($role as $rk=>$rv): ?><tr>
          <td><?php echo ($rk+1); ?></td>
          <td><?php echo ($rv["name"]); ?></td>
          <td><?php echo ($rv["remark"]); ?></td>
          <td>
            <?php if($rv[status] == 1): ?>开启
            <?php else: ?> <span style="color:#777">关闭</span><?php endif; ?>
          </td>
          <td><a class="link" href="<?php echo U('Rbac/permission',array('id'=>$rv['role_id']));?>">配置权限</a></td>
        </tr><?php endforeach; endif; ?>
      
     
    </tbody>
  </table> 
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