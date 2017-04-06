<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="/Application/Home/View/Public/css/style.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
</head>
<body>
	<div class="header" style="height:100px;">
		<div class="header-top">
			<div class="logo" style="position: relative;top:-50px;">
				<img src="/Application/Home/View/Public/images/logo.png" alt="">
			</div>
		</div>
		<div class="header-bottom">
			<h2>欢迎登录</h2>
		</div>
	</div>
	<div class="bg"></div>
	<div class="container">
		<form action="<?php echo U('Account/runLogin');?>" method="post">
			<div class="form-item">
				<div class="form-item-account">
					<label>用户名</label>
					<input type="text" name="username" placeholder="您的账户名和登录名">
				</div>
				<div class="form-item-account">
					<label>密码</label>
					<input type="password" name="password" placeholder="密码">
				</div>
				<div class="form-item-account">
					<input type="submit" name="submit" id="account-submit" value="立即登录">
				</div>
				<span>没有账号？</span>
				<a href="register.html">立即注册</a>
			</div>
		</form>
		
		
	</div>
</body>
</html>