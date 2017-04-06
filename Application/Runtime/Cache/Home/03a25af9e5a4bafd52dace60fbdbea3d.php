<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Single</title>
<link href="/Application/Home/View/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Application/Home/View/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="/Application/Home/View/Public/js/jquery.min.js"></script>
<script src="/Application/Home/View/Public/js/addCar.js"></script>
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

<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			  	<?php if(is_array($pro)): foreach($pro as $key=>$v): ?><li data-thumb="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>">
				        <div class="thumb-image"> <img src="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>" data-imagezoom="true" class="img-responsive"> </div>
				    </li>

				    <li data-thumb="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>">
				        <div class="thumb-image"> <img src="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>" data-imagezoom="true" class="img-responsive"> </div>
				    </li>

				    <li data-thumb="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>">
				        <div class="thumb-image"> <img src="/Application/Public/Uploads/<?php echo ($v["photourl"]); echo ($v["photoname"]); ?>
				        " data-imagezoom="true" class="img-responsive"> </div>
				    </li><?php endforeach; endif; ?>
			  </ul>
		</div>
	</div>	
	<?php if(is_array($pro)): foreach($pro as $key=>$v): ?><div class="col-md-7 single-top-in">
			<div class="single-para simpleCart_shelfItem">
				<h1><?php echo ($v["name"]); ?></h1>
				<p>分辨率: 1920x1080
					水平可视角度: 178°
					成色: 全新
					液晶屏种类: 完美屏
					屏幕比例: 16:9
					标称对比度: 3000:1
					屏幕类型: LED</p>
				¥<span  class="add-to item_price thisPrice"><?php echo ($v["price"]); ?></span>
				<div class="available">
				<ul>
					<li>型号:
						<select>
						<option>14英寸</option>
						<option>15.6英寸</option>
						<option>23.5英寸</option>
						</select>
					</li>
					<li>数量:
						<input type="button" value="-" class="reduce">
						<input type="text" class="pro-num count" value="1">
						<input type="button" value="+" class="add">
					</li>
				</ul>
				</div>
				<div class="alert alert-warning">
				    <p>17寸正屏4:3一线屏显示器</p>
				    <p>限量 推荐：22寸暗线多点显示器</p>
				</div>
					<a href="javascript:;" class="addCar cart item_add add_big">放入购物车</a>
					<input type="hidden" class="id" name="" value="<?php echo ($v["id"]); ?>">
			</div>
		</div><?php endforeach; endif; ?>
	
	<div class="col-md-12 grid" id="detiles">
		<h1>商品详情</h1>
		<p>
		CCC证书编号: 2016010903878416<br/>
		产地: 中国大陆<br/>
		品牌: CMOGOOD/启美<br/>
		型号: QM220D<br/>
		套餐类型: 官方标配<br/>
		摄像头类型: 无摄像头<br/>
		是否无线: 有线<br/>
		附加功能: 可壁挂<br/>
		颜色分类: 17寸正屏4:3一线屏显示器 17寸正屏一线USB电视显示器 19寸一线屏电脑显示器 <br/>19寸一线屏USB电视显示器 20寸一线屏电脑显示器 20寸一线屏USB电视显示器 22寸一线屏电脑显示器 22寸一线屏USB电视显示器 24寸一线屏电脑显示器 24寸一线屏USB电视显示器 <br/>推荐：19寸暗线多点显示器 限量 推荐：19暗线USB电视显示器 限量 推荐：22寸暗线多点显示器 限量 推荐：22暗线USB电视显示器 限量 推荐：24寸暗线晕点显示器 限量 推荐：24暗线晕点USB电视显示器 27寸一线屏电脑显示器<br/>
		屏幕尺寸: 21.5英寸<br/>
		售后服务: 店铺三包<br/>
		是否宽屏: 是<br/>
		黑白响应时间: 2毫秒<br/>
		灰阶响应时间: 5毫秒<br/>
		点距: 0.2745<br/>
		面板类型: IPS<br/>
		接口类型: VGA<br/>
		平均亮度: 500cd/m^2<br/>
		分辨率: 1920x1080<br/>
		成色: 全新<br/>
		液晶屏种类: 普通屏<br/>
		屏幕比例: 16:9<br/>
		上市时间: 2016<br/>
		屏幕类型: LED<br/>
		是否自带音箱: 否<br/>
		适用场景: 游戏 办公 经济适用 媒体<br/>
		</p>
		<img src="/Application/Home/View/Public/images/details.jpg" alt="商品详情">
	</div>
			<div class="clearfix"> </div> 
			<div class="content-top1">
				<h1 style="font-size: 1.5em;font-family: '微软雅黑';color:#000;text-align:center;margin-bottom: 20px;">推荐购买</h1>
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/Application/Home/View/Public/images/pi.png" alt="" />
						</a>
						<h3><a href="single.html">九段it168</a></h3>
						<div class="price">
								<h5 class="item_price">¥300</h5>
								<a href="#" class="item_add">放入购物车</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/Application/Home/View/Public/images/pi1.png" alt="" />
						</a>
						<h3><a href="single.html">静音无声无线鼠标</a></h3>
						<div class="price">
								<h5 class="item_price">¥300</h5>
								<a href="#" class="item_add">放入购物车</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="/Application/Home/View/Public/images/pi2.png" alt="" />
						</a>
						<h3><a href="single.html">静音无声无线鼠标</a></h3>
						<div class="price">
								<h5 class="item_price">¥300</h5>
								<a href="#" class="item_add">放入购物车</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			
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
					
			<li class="item4"><a href="javascript:;" class="menumain">硬盘</a>
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
		<h3 class="cate">热款推荐</h3>
	<div class="product-go">
		<div class=" fashion-grid">
			<a href="single.html"><img class="img-responsive " src="/Application/Home/View/Public/images/pr.jpg" alt=""></a>	
		</div>
		<div class=" fashion-grid1">
			<h6 class="best2"><a href="single.html" >官方专卖C24F396FH</a></h6>
			<span class=" price-in1"> ¥40.00</span>
		</div>	
		<div class="clearfix"> </div>
	</div>
	<div class="product-go">
		<div class=" fashion-grid">
			<a href="single.html"><img class="img-responsive " src="/Application/Home/View/Public/images/pr1.jpg" alt=""></a>	
		</div>
		<div class=" fashion-grid1">
			<h6 class="best2"><a href="single.html" >官方专卖C24F396FH</a></h6>
			<span class=" price-in1"> ¥40.00</span>
		</div>	
		<div class="clearfix"> </div>
	</div>
	<div class="product-go">
		<div class=" fashion-grid">
			<a href="single.html"><img class="img-responsive " src="/Application/Home/View/Public/images/pr2.jpg" alt=""></a>	
		</div>
		<div class=" fashion-grid1">
			<h6 class="best2"><a href="single.html" >官方专卖C24F396FH</a></h6>
			<span class=" price-in1"> ¥40.00</span>
		</div>	
		<div class="clearfix"> </div>
	</div>	
	<div class="product-go">
		<div class=" fashion-grid">
			<a href="single.html"><img class="img-responsive " src="/Application/Home/View/Public/images/pr3.jpg" alt=""></a>	
		</div>
		<div class=" fashion-grid1">
			<h6 class="best2"><a href="single.html" >官方专卖C24F396FH</a></h6>
			<span class=" price-in1"> ¥40.00</span>
		</div>	
		<div class="clearfix"> </div>
	</div>		
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
<script src="/Application/Home/View/Public/js/jquery.min.js"></script>
<script src="/Application/Home/View/Public/js/imagezoom.js"></script>
<script defer src="/Application/Home/View/Public/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/Application/Home/View/Public/css/flexslider.css" type="text/css" media="screen" />

<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<script type="text/javascript">
	$(function(){
		var reduce = $('.reduce');
		var add = $('.add');
		var pro_num = $('.pro-num');
		var num_value = pro_num.val();
		add.click(function(){
			num_value++;
			pro_num.val(num_value);
		});
		reduce.click(function(){
			if(num_value >= 2){
				num_value--;
				pro_num.val(num_value);
			}
		});
	});
</script>
</body>
</html>