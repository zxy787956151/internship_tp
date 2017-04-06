<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/Application/Home/View/Public/css/style.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
    <link rel="stylesheet" href="/Application/Home/View/Public/css/bannerList.css">
	<script src="/Application/Home/View/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Application/Home/View/Public/js/main.js"></script>
</head>
<body>
	<div class="header">
		<div class="header-top">
			<div class="header-title">
				<span><img src="/Application/Home/View/Public/images/telephone.png" alt=""></span>
				<p>131-1232-3232</p>
				<a href="<?php echo U('Product/car');?>">
					<span><img src="/Application/Home/View/Public/images/cart.png" alt=""></span>
					购物车
					<span id='cart-num'><?php echo $carCount;?></span> 
					
				</a>
				<a href="<?php echo U('Account/register');?>">
					<span><img src="/Application/Home/View/Public/images/res.png" alt=""></span>
					注册
				</a>
				<?php if($username): ?><a href="#">
						<span><img src="/Application/Home/View/Public/images/login.png" alt=""></span>
						<?php echo ($username); ?>
					</a>  
				<?php else: ?> 
					<a href="<?php echo U('account/index');?>">
						<span><img src="/Application/Home/View/Public/images/login.png" alt=""></span>
						登录
					</a><?php endif; ?>
			</div>
			<div class="logo">
				<img src="/Application/Home/View/Public/images/logo.png" alt="">
			</div>
			<div class="search">
				<input type="text" placeholder="  搜索商品">
				<input type="button" value="L">
			</div>
		</div>
		<div class="header-bottom">
			<div class="nav">
				<ul>
					<li>
						<a href="<?php echo U('Index/index');?>">首页</a>
					</li>

					<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tv): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Product/index',array('id'=>$tv['id']));?>"><?php echo ($tv["name"]); ?></a>
							<div class="menu_show">
								<ul>
									<span><?php echo ($tv["name"]); ?></span>
									<?php if(is_array($tv['child'])): $i = 0; $__LIST__ = $tv['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/index',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container-left">
			<?php if(is_array($left)): $i = 0; $__LIST__ = $left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?><div class="link-nav">
					<span><a href="<?php echo U('Product/index',array('id'=>$lv['id']));?>"><?php echo ($lv["name"]); ?></a></span>
						<?php if(is_array($lv['child'])): $i = 0; $__LIST__ = $lv['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/index',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
		<div class="container-right">
			<div class="banner">
				<ul class="">
				<foreach>
				</foreach>		
				<li><a href=""><img src="/Application/Home/View/Public/images/banner1.jpg" alt=""></a></li>
				<li><a href=""><img src="/Application/Home/View/Public/images/banner2.jpg" alt=""></a></li>
				<li><a href=""><img src="/Application/Home/View/Public/images/banner3.jpg" alt=""></a></li>
				<li><a href=""><img src="/Application/Home/View/Public/images/banner4.jpg" alt=""></a></li>
				</ul>
				<div class="left-btn"></div>
				<div class="right-btn"></div>
				<div class="img-btn-list"></div>
			</div>

			<script src="/Application/Home/View/Public/js/bannerList.js"></script>
			<script>
			bannerListFn(
			$(".banner"),
			$(".img-btn-list"),
			$(".left-btn"),
			$(".right-btn"),
			2000,
			true
			);
			</script>
			<div class="product-show">
				<?php if(is_array($hot)): foreach($hot as $key=>$v): ?><div class="product-card">
						<a href="javascript:;">
							<img src="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>" />
						</a>
						<span><?php echo ($v["name"]); ?></span>
						<h5>￥<?php echo ($v["price"]); ?></h5>
						<!-- <a href="#" class="item_add">放入购物车</a> -->
					</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
</body>
</html>