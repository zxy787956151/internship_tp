<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/Application/Admin/View//Public/layui/css/layui.css" media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
  <script src="/Application/Admin/View//Public/js/jquery.min.js"></script>
  <script src="/Application/Admin/View//Public/layui/layui.js"></script>
  <script type="text/javascript">
    ;!function(){
      layui.use('form', function(){
        var form = layui.form(); //只有执行了这一步，部分表单元素才会修饰成功
        
        //……
      });
    }();
  </script>
  <style type="text/css">
    body{
      background-color: #fff;
    }
  </style>
</head>
<body>
              
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend>添加角色</legend>
</fieldset>
 
<form class="layui-form" action="<?php echo U('Rbac/addRole');?>" method="post">
  
  
  <div class="layui-form-item" style="display: block;text-align: center;">
    <div class="layui-inline">
      <label class="layui-form-label">角色名称</label>
      <div class="layui-input-inline">
         <input type="text" name="name" lay-verify="required|number" autocomplete="off" class="layui-input">
      </div>
    </div>
   
    <br>
    <br>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">角色描述</label>
      <div class="layui-input-inline">
        <input type="text" name="remark" lay-verify="required|number" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>
   
  
 
  <div class="layui-form-item">
    <div class="layui-input-block">
      <input type="radio" name="status" value="1" title="启用角色" checked="">
      <input type="radio" name="status" value="0" title="关闭角色">
    </div>
  </div>
  
  <div class="layui-form-item" >
    <input type="submit" class="layui-btn" lay-submit="" lay-filter="demo2" name="submit" value="保存添加">
  </div>
</div>
</form>
          
<script src="//res.layui.com/layui/build/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form()
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });
  
  //监听指定开关
  form.on('switch(switchTest)', function(data){
    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
      offset: '6px'
    });
    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
  
  
});
</script>

</body>
</html>