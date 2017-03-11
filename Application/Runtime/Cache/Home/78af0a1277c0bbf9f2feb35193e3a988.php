<?php if (!defined('THINK_PATH')) exit();?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
<link href="/Application/Home/View//Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/Application/Home/View//Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/Application/Home/View//Public/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="I-wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="/Application/Home/View//Public/js/move-top.js"></script>
<script type="text/javascript" src="/Application/Home/View//Public/js/easing.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<script src="/Application/Home/View//Public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/Application/Home/View//Public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/Application/Home/View//Public/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="/Application/Home/View//Public/js/bootstrap.js"></script>
	<!-- js -->
	<style>
		.Clearing{
			font-size: 24px;
			width:200px;
			height:30px;
			background-color: orange;
		}
	</style>
</head>
<body> 
<!--header-->	
		<div class="header-info">
			<div class="container">
					<div class="header-top-in">
						
						<ul class="support">
							<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>787956151@qq.com</a></li>
							<li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>138 9405 5929</span></li>			
						</ul>
						<ul class=" support-right">

							<li><a href="<?php echo U('account/index');?>">
									<i class="glyphicon glyphicon-user" class="men"> </i>
									<?php echo ($_SESSION[user]); ?>
								</a>
							</li>
							<?php if(isset($_SESSION[user]) == true): ?><a href="<?php echo U('Account/out');?>">注销</a><?php endif; ?>
							<li><a href="<?php echo U('register/index');?>"><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>			
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>	
	<div class="header header5">
	<div class="header-top">

			<div class="header-bottom">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">Z-<span>xy</span></a></h1>
				</div>
		 <!---->	
		 
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="<?php echo U('Index/index');?>">Home</a></li>

				<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><li class="grid">
						<?php if($v["title"] == CONTACT): ?><a href="<?php echo U('Contact/index');?>"><?php echo ($v["title"]); ?></a>
							<?php else: ?> <a href="<?php echo U('Product/index',array('id' => 0));?>"><?php echo ($v["title"]); ?></a><?php endif; ?>

						<div class="mepanel">
							<div class="row">
								
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>											
											<?php  for ($i=0; $i <count($v['child']) ; $i++) { echo "<li><a href='".U('Product/index',array('id' => 0))."'>" .$v['child'][$i]['title']."</a></li>"; } ?>
										</ul>
									</div>
																
							</div>
						</div>
					</li><?php endforeach; endif; ?>
				
					
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->
					<div class="cart box_1">
						<a href="<?php echo U('Product/car');?>">
						<h3> <div class="total">
							<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
							<img src="/Application/Home/View//Public/images/cart2-2.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>	
 				<div class="clearfix"> </div>	
			</div>	
<!---->
<div class="back">
	<h2>Checkout</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">BEST SELLERS</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/be.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html">Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/be1.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.html">Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/be2.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html">Lorem ipsum dolor sit
amet consectetuer </a></h6>
								<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<span class=" price-in1"><small>$70.00</small> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
				</div>
<div class=" per1">
				<a href="single.html"><img class="img-responsive" src="/Application/Home/View//Public/images/pi9.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>20%</span>
				</div></a>
			</div>
				</div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="check-out">	 
			
		 <div class=" cart-items">
			 <h3>My Shopping Bag (2)</h3>
				<script>$(document).ready(function(c) {
//					$('.close1').on('click', function(c){
//						$('.cart-header').fadeOut('slow', function(c){
//							$('.cart-header').remove();
//						});
//						});
//					});
			   </script>


				
				  <div class="in-check" >

		  <?php if($_SESSION['user'] == null): ?><!--eq 等于-->
			  <!--neq 不等于-->
			  <!--gt 大于-->
			  <!--egt 大于等于-->
			  <!--lt 小于-->
			  <!--elt 小于等于-->
			  <!--like LIKE-->
			  <!--between BETWEEN-->
			  <!--notnull IS NUT NULL-->
			  <!--null IS NULL-->
			  <ul class="unit">
				  <li><span>无记录,请登录!</span></li>
				  <div class="clearfix"> </div>
			  </ul>
			  <?php else: ?>

			  <ul class="unit">
				  <li><span>Photo</span></li>
				  <li><span>Product Name</span></li>
				  <li><span>Unit Price</span></li>
				  <li><span>Stock Status</span></li>
				  <li><span>Purchase Quantity</span></li>
				  <li></li>
				  <div class="clearfix"> </div>
			  </ul>

				  <?php if(is_array($model)): foreach($model as $key=>$plvv): ?><ul class="cart-header">
						  <a href="<?php echo U('Checkout/close',array('id' => $plvv[id]));?>"><div class="close1"></div></a>
						  <li class="ring-in"><a href="<?php echo U('Single/index');?>&pid=<?php echo ($plvv["id"]); ?>" ><img src="/Application/Home/View//Public/images/<?php echo ($plvv["photo"]); ?>" class="img-responsive" alt=""></a>
						  </li>
						  <li><span><?php echo ($plvv["name"]); ?></span></li>
						  <li><span><?php echo ($plvv["price"]); ?></span></li>
						  <li>
							  <span>
								  <?php if($plvv[stock] == 1): ?>In Stock
									<?php else: ?>Out Of Stock<?php endif; ?>
							  </span>
						  </li>
						  <li><span><?php echo ($plvv["quantity"]); ?></span></li>
						  <div class="clearfix"> </div>
					  </ul><?php endforeach; endif; endif; ?>
			  <ul class="cart-header">
				  <center><a class="Clearing" href="<?php echo U('Checkout/clear');?>">结算</a></center>
			  </ul>
		</div>
			 </div>
					  
		 </div>
		 
<div class=" per2">
				<a href="single.html"><img class="img-responsive" src="/Application/Home/View//Public/images/pi2.jpg" alt="">
				<div class="six3">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>30%</span>
				</div></a>
			</div>
			<div class=" per3">
				<a href="single.html"><img class="img-responsive" src="/Application/Home/View//Public/images/pi3.jpg" alt="">
				<div class="six3">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>45%</span>
				</div></a>
			</div>
						<div class=" per4">
				<a href="single.html"><img class="img-responsive" src="/Application/Home/View//Public/images/pi10.jpg" alt="">
				<div class="six4">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>70%</span>
				</div></a>
			</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
				<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>HAPPY SHOPPING</h3>
						<p>Lorem Ipsum sit amet consectuer adipiscing elit
sed diam nonummy nibh euismod</p>
					</div>
				</div>
<!---->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				<h3>Quick Contact</h3>
				<form>
						
						<input type="text" value="ENTER YOUR NAME*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR NAME*';}">
						
						<input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR EMAIL*';}">
						
						<input type="text" value="ENTER YOUR PHONE" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR PHONE';}">
					
						<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ENTER YOUR MESSAGE*';}">ENTER YOUR MESSAGE*</textarea>
						
							<input type="submit" value="SEND MESSAGE" >
						
					</form>

			</div>
			<div class="col-md-4 footer-middle">
				<h3>Top Rated Products</h3>
					<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f1.jpg" alt="">
									<p>SALE</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f2.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f3.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>

			</div>
			<div class="col-md-4 footer-bottom">
				<h3>Get In Touch</h3>
				<div class="logo-footer">
					<ul class="social">
		                    <li><a href="#"><i class="fb"> </i> </a></li>
		                    <li><a href="#"><i class="rss"></i></a></li>
		                    <li><a href="#"><i class="twitter"></i></a></li>
		                    <li><a href="#"><i class="dribble"></i></a></li>
		                    <div class="clearfix"></div>
		                </ul>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
					<ul class="social-footer ">
						<li><span><i class="glyphicon glyphicon-earphone"> </i>+62 226759804 </span></li>
						<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes"> </i>info@example.com</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-link" class="mes-in"> </i>http://example.com</a></li>
					</ul>
					<a href="#"><img src="/Application/Home/View//Public/images/pa.png" alt=""></a>
					</div>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class">Copyrights © 2015 I Wear. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
				 <!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
<!---->
</body>
</html>