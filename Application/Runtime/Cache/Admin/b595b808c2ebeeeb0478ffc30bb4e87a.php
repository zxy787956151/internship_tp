<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="/Application/Admin/View//Public/style/style.css">
	<script type="text/javascript" src="/Application/Admin/View//Public/js/jquery.js"></script>
	<script type="text/javascript" src="/Application/Admin/View//Public/js/left.js"></script>
</head>
<body>
	<div class="container">
		<div class="nav">
			<div class="head">
				<img src="/Application/Admin/View//Public/images/head/1901.jpg" alt="">
			</div>
			<div class="menu">
				<ul>
					<a href="<?php echo U('Menu/index');?>" class="nav-main" id="nav-main1" target="myFrame"><span id="nav-ico1"></span>菜单管理</a>
					<!-- <li class="nav-li" id="nav-li1">
						<a href="<?php echo U('Menu/index');?>" target="myFrame">菜单管理</a>
					</li> -->
				</ul>
				<ul>
					<a href="#" class="nav-main" id="nav-main2"><span id="nav-ico2"></span>用户&权限管理</a>
					<li class="nav-li" id="nav-li2">
						<a href="<?php echo U('Access/index');?>" target="myFrame">用户列表</a>
						<a href="<?php echo U('Rbac/role');?>" target="myFrame">角色列表</a>
						<a href="<?php echo U('Rbac/node');?>">节点列表</a>
					</li>
				</ul>
				<ul>
					<a href="<?php echo U('Product/index');?>" class="nav-main" id="nav-main2" target="myFrame"><span id="nav-ico2"></span>商品管理</a>
				</ul>
				<ul>
					<a href="<?php echo U('Product/checkout');?>" class="nav-main" id="nav-main3" target="myFrame"><span id="nav-ico3"></span>用户结算</a>
				</ul>
				
				<ul>
					<a href="#" class="nav-main" id="nav-main5"><span id="nav-ico5"></span>设置</a>
					<li class="nav-li" id="nav-li5">
						<a href="<?php echo U('Login/loginout');?>">退出登录</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<iframe src="" frameborder="0" name="myFrame"></iframe>
		</div>
	</div>
</body>
</html>