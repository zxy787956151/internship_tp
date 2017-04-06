<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link href="/Application/Home/View/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Application/Home/View/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/Application/Home/View/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Application/Home/View/Public/js/addCar.js"></script>
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
<div class="products">
<div class="container">
<h1>产品列表</h1>
<div class="col-md-9">
<div class="content-top1">

<?php if(is_array($model)): foreach($model as $key=>$v): ?><div class="col-md-4 col-md3">
	<div class="col-md1 simpleCart_shelfItem">
	<a href="<?php echo U('Single/index');?>&pid=<?php echo ($v["id"]); ?>">
	<img class="img-responsive" src="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>" alt="" />
	</a>
	<h3><a href="single.html"><?php echo ($v["name"]); ?></a></h3>
	<div class="price">
	<h5 class="item_price">¥<?php echo ($v["price"]); ?></h5>
	<!-- <a href="#" class="addCar item_add">放入购物车</a> -->
	<div class="clearfix"> </div>
	</div>
	</div>
	</div><?php endforeach; endif; ?>

<div class="clearfix"> </div>
</div>	
</div>
<div class="col-md-3 product-bottom">
<div class=" rsidebar span_1_of_left">
<h3 class="cate">产品分类</h3>
<ul class="menu-drop">
<li class="item1"><a href="javascript:;" class="menumain">显卡</a>
<ul class="cute" id="cute1">
<li class="subitem1"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem2"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem3"><a href="product.html">官方专卖C24F396FH</a></li>
</ul>
</li>
<li class="item2"><a href="javascript:;" class="menumain">屏幕</a>
<ul class="cute">
<li class="subitem1"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem2"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem3"><a href="product.html">官方专卖C24F396FH</a></li>
</ul>
</li>
<li class="item3"><a href="javascript:;" class="menumain">内存条</a>
<ul class="cute">
<li class="subitem1"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem2"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem3"><a href="product.html">官方专卖C24F396FH</a></li>
</ul>
</li>
<li class="item4"><a href="javascript:;" class="menumain">主板</a>
<ul class="cute">
<li class="subitem1"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem2"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem3"><a href="product.html">官方专卖C24F396FH</a></li>
</ul>
</li>

<li class="item4">
<a href="javascript:;" class="menumain">硬盘</a>
<ul class="cute">
<li class="subitem1"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem2"><a href="product.html">官方专卖C24F396FH</a></li>
<li class="subitem3"><a href="product.html">官方专卖C24F396FH</a></li>
</ul>
</li>
</ul>
</div>
<script type="text/javascript" src="/Application/Home/View/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Application/Home/View/Public/js/right.menu.js"></script>
<div class="product-bottom">

<h3 class="cate">热卖爆款</h3>

<?php if(is_array($newest)): foreach($newest as $key=>$v): ?><div class="product-go">
	<div class=" fashion-grid">
	<a href="single.html"><img class="img-responsive " src="/Application/Home/View/Public/images/pr.jpg" alt=""></a>	
	</div>
	<div class=" fashion-grid1">
	<h6 class="best2"><a href="single.html" ><?php echo ($v["name"]); ?></a></h6>
	<span class=" price-in1"> ¥<?php echo ($v["price"]); ?></span>
	</div>	
	<div class="clearfix"> </div>
	</div><?php endforeach; endif; ?>

</div>
<div class="tag">	
<h3 class="cate">标签</h3>
<div class="tags">
<ul>
<li><a href="#">显卡</a></li>
<li><a href="#">键盘</a></li>
<li><a href="#">显示器</a></li>
<li><a href="#">鼠标</a></li>
<div class="clearfix"> </div>
</ul>
</div>					
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</body>
</html>