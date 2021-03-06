<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register</title>
	<link rel="stylesheet" href="/Application/Home/View/Public/css/style.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
	<script type="text/javascript" src="/Application/Home/View/Public/js/jquery.min.js"></script>
</head>
<body>
	<div class="header" style="height:100px;">
		<div class="header-top">
			<div class="logo" style="position: relative;top:-50px;">
				<img src="/Application/Home/View/Public/images/logo.png" alt="">
			</div>
		</div>
		<div class="header-bottom">
			<h2>欢迎注册</h2>
			<span>已有账号？</span>
			<a href="<?php echo U('Account/index');?>" class="login-link">请登录</a>
		</div>
	</div>
	<form action="<?php echo U('Account/register');?>" method="post">
		<div class="container">
			<div class="form-item-account">
				<label>用户名</label>
				<input type="text" name="username" placeholder="您的账户名和登录名">
			</div>
			<div class="form-item-account">
				<label>设置密码</label>
				<input type="password" name="password" placeholder="建议至少使用两种字符组合">
			</div>
			<div class="form-item-account">
				<label>重复密码</label>
				<input type="password" name="repassword" placeholder="请再次输入密码">
			</div>
			<a href="javascript:void(0)"><img id="mask" class="verify" src="<?php echo U('Account/verify');?>" alt="点击刷新"/></a>
			<div class="form-item-account">
				<label>验证码</label>
				<input type="text" name="verify" placeholder="请输入图片中字符">
			</div>
			<div class="form-item-account">
				<input type="submit" name="submit" id="account-submit" value="立即注册">
			</div>
		</div>
	</form>
	<script>
	    $(function(){
	        $(".verify").click(function(){
	            var src = "<?php echo U('Account/verify');?>";
	            var random = Math.floor(Math.random()*(1000+1));
	            $(this).attr("src",src+"&random="+random);

	        });
	    })
	</script>
</body>
</html>