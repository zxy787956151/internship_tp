<?php if (!defined('THINK_PATH')) exit();?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo ($user); ?></title>
<link href="/Application/Home/View//Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/Application/Home/View//Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/Application/Home/View//Public/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="I wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="/Application/Home/View//Public/js/move-top.js"></script>
<script type="text/javascript" src="/Application/Home/View//Public/js/easing.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<!--//slider-script-->
<script src="/Application/Home/View//Public/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="/Application/Home/View//Public/js/bootstrap.js"></script>
	<!-- js -->
<script src="/Application/Home/View//Public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/Application/Home/View//Public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/Application/Home/View//Public/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
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

		<div class="header">
		
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
						<a href="<?php echo U('Checkout/index');?>">
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
<div class="banner">
		<div class="banner-top">
	         <h2>THIS IS I-WEAR</h2>
	         <p>Goggles or safety glasses are forms of protective eyewear<span>fthat usually enclose or protect the area surrounding the eye in order to prevent particulates.</span></p>
</div>
	<div class="now">
	         <a class="morebtn" href="<?php echo U('Product/index',array('pd'=>0));?>">Explore</a>
	         <a class="morebtn at-in" href="single.html">Shop Now</a>
	         <div class="clearfix"> </div>
	         </div>
 	</div>	
 				<div class="clearfix"> </div>	
			</div>
		  <!---->
		<div class="sap_tabs">
			<div class="container">
			<label class="line"> </label>
			<h2>Latest Products</h2>
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Fashion Goggles</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Classic Goggles</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Sun Goggles</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="tab_img">
									  <div class="img-top simpleCart_shelfItem">
										
					   		  			   <img src="/Application/Home/View//Public/images/pi2.jpg" class="img-responsive" alt=""/>
											
								              <div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												 	<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Fashion Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href=""><i class="item_add"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
										
										</div>
										<div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="/Application/Home/View//Public/images/pi3.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
													 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Classic Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											  <div class="col-in">
											  	<p>NEW</p>
											  </div>
											 </div>
											  <div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="/Application/Home/View//Public/images/pi4.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
															 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Sun Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											 <div class="col-in col-in-1">
											  	<p>SALE <span>30%</span></p>
											  </div>
											</div>
											<div class="clearfix"></div>
							     </div> 	        					 
						  </div>
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="tab_img">
									  <div class="img-top simpleCart_shelfItem">
										
					   		  			   <img src="/Application/Home/View//Public/images/pi9.jpg" class="img-responsive" alt=""/>
											
								              <div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Fashion Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
										</div>
										<div class="img-top simpleCart_shelfItem">
					   		  			   <img src="/Application/Home/View//Public/images/pi8.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Classic Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											  <div class="col-in">
											  	<p>NEW</p>
											  </div>
											 </div>
											  <div class="img-top simpleCart_shelfItem">
					   		  			   <img src="/Application/Home/View//Public/images/pi10.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Sun Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											 <div class="col-in col-in-1">
											  	<p>SALE <span>30%</span></p>
											  </div>
											</div>
											<div class="clearfix"></div>
							     </div>						 
						  </div>
						    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="tab_img">
									  <div class="img-top simpleCart_shelfItem">
										
					   		  			   <img src="/Application/Home/View//Public/images/pi5.jpg" class="img-responsive" alt=""/>
											
								              <div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Fashion Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
										</div>
										<div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="/Application/Home/View//Public/images/pi6.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 	<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Classic Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											  <div class="col-in">
											  	<p>NEW</p>
											  </div>
											 </div>
											  <div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="/Application/Home/View//Public/images/pi7.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												 <ul class="round-top">
												 	<li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
												 	<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
												 </ul>
												 
												 	<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">Sun Goggles</h6>
														<span class="dollor item_price">$50.00</span>
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														<ul class="social">
															<li><a href="#"><i class="item_add"> </i></a></li>
															<li><a href="#"><i class="text"> </i></a></li>
														</ul>
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											 <div class="col-in col-in-1">
											  	<p>SALE <span>30%</span></p>
											  </div>
											</div>
											<div class="clearfix"></div>
							     </div>	 	        					 
						  </div>		
                  </div>
          </div>
         </div>
	</div>
	<!--start-shoes--> 
	<div class="goggles"> 
		<div class="container"> 
			<h2>Latest Goggles</h2>
			<div class="product-one">

				
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">


				
			<?php if(is_array($latest)): foreach($latest as $key=>$v): ?><div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="<?php echo U('Single/index');?>&pid=<?php echo ($v["id"]); ?>">
								<img src="/Application/Home/View//Public/images/<?php echo ($v["photo"]); ?>" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4><?php echo ($v["name"]); ?></h4>
						<p><a class="item_add" href="<?php echo U('Checkout/addCar',array('pid'=>$v[pid]));?>"><i></i> <span class=" item_price">$<?php echo ($v["price"]); ?></span></a></p>
						
					</div>
				</div><?php endforeach; endif; ?>
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-shoes-->
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
								<h6><a href="#" >Fashion Combo Goggles</a></h6>
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
								<h6><a href="#" >Classic Combo Goggles</a></h6>
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
								<h6><a href="#" >sun Combo Goggles</a></h6>
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
		                    <li><a href="#"><i class="rss"> </i></a></li>
		                    <li><a href="#"><i class="twitter"> </i></a></li>
		                    <li><a href="#"><i class="dribble"> </i></a></li>
		                    <div class="clearfix"> </div>
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