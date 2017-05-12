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
    a:hover{
      color: #01AAED;
    }

    body{
      background-color: #fff;
    }

    th {
      color: #F7B824;
    }
  </style>
</head>
<body>
         
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>节点列表</legend>
</fieldset>  
<br>
<button class="layui-btn" onclick="location.href='<?php echo U('Rbac/addRole');?>';">
    <i class="layui-icon">&#xe608;</i> 添加应用
</button>
<br>
<br>
<br>
<span style="color:#F7B824; font-size: 24px;">后台应用</span>
<a href="#"> [添加控制器] </a><a href="#"> [修改] </a><a href="#"> [删除] </a>
<br>

<table class="layui-table" lay-even="" lay-skin="nob">
  <?php if(is_array($dfs)): foreach($dfs as $key=>$dv): if($dv[level] == 1): ?><thead>
      <tr>
        <th colspan="10"><?php echo ($dv["name"]); ?><a href=""> [添加方法] </a></th>
      </tr> 
    </thead>
    <?php elseif($name == 2): ?>value2
    <?php else: ?> value3<?php endif; endforeach; endif; ?>
  
  
  <tbody>

      <tr>
        <td>添加角色<a href=""> [修改] </a><a href=""> [删除] </a></td>
        <td>添加用户<a href=""> [修改] </a><a href=""> [删除] </a></td>
        <td>节点列表<a href=""> [修改] </a><a href=""> [删除] </a></td>
        <td>角色列表<a href=""> [修改] </a><a href=""> [删除] </a></td>
        <td>用户列表<a href=""> [修改] </a><a href=""> [删除] </a></td>
      </tr>  
    
   
  </tbody>
</table> 
          
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