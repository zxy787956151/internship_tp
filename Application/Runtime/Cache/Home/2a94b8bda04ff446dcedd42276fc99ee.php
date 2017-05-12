<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="/Application/Home/View/Public/css/style.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
    <link rel="stylesheet" href="/Application/Home/View/Public/css/jquery.hiSlider.min.css">
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
				<?php if($username): ?><a href="<?php echo U('Account/userInfo');?>">
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
								<ul><!-- <li><a href="<?php echo U('Product/index',array('id'=>$tv['id']));?>"><?php echo ($tv["name"]); ?></a></li> -->
									<?php if(is_array($tv['child'])): $i = 0; $__LIST__ = $tv['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/index',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="container-index">
		<div class="banner">
			<ul class="hiSlider hiSlider1">
		        <li class="hiSlider-item"><img src="/Application/Home/View/Public/images/1.jpg" alt="11111"></li>
		        <li class="hiSlider-item"><img src="/Application/Home/View/Public/images/2.jpg" alt="22222"></li>
		        <li class="hiSlider-item"><img src="/Application/Home/View/Public/images/3.jpg" alt="33333"></li>
		    </ul>
		</div>

		<script src="/Application/Home/View/Public/js/jquery.hiSlider.min.js"></script>
		<script>
		    $('.hiSlider1').hiSlider();
		    $('.hiSlider2').hiSlider({
		        isFlexible: true,
		        mode: 'fade',
		        isSupportTouch: false,
		        isShowTitle: false,
		        isShowPage: false,
		        titleAttr: function(curIdx){
		            return $('img', this).attr('alt');
		        }
		    });
		    $('.hiSlider3').hiSlider({
		        isFlexible: true,
		        isSupportTouch: true,
		        titleAttr: function(curIdx){
		            return $('img', this).attr('alt');
		        }
		    });
		    $('.hiSlider4').hiSlider({
		        startSlide: 2,
		        direction: 'top'
		    });
		</script>
		<div class="container-left">
			<?php if(is_array($left)): $i = 0; $__LIST__ = $left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?><div class="link-nav">
					<span><a href="<?php echo U('Product/index',array('id'=>$lv['id']));?>"><?php echo ($lv["name"]); ?></a></span>
						<?php if(is_array($lv['child'])): $i = 0; $__LIST__ = $lv['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/index',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
		<div class="container-right">
			<div class="product-show">
				<?php if(is_array($hot)): foreach($hot as $key=>$v): ?><div class="product-card">
						<a href="<?php echo U('Single/index');?>&pid=<?php echo ($v["id"]); ?>">
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