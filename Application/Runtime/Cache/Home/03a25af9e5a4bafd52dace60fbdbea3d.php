<?php if (!defined('THINK_PATH')) exit();?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
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
<script type="text/javascript" src="/Application/Home/View//Public/js/addCar.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<!-- start menu -->
<link href="/Application/Home/View//Public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/Application/Home/View//Public/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
<!--//slider-script-->
<script src="/Application/Home/View//Public/js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>	
<script src="/Application/Home/View//Public/js/simpleCart.min.js"> </script>
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="/Application/Home/View//Public/js/bootstrap.js"></script>
	<!-- js -->

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
<div class="back">
	<h2>Product Details</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIES</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">Men </a>
			<ul class="cute">
				<li class="subitem1"><a href="#">Cute Kittens </a></li>
				<li class="subitem2"><a href="#">Strange Stuff </a></li>
				<li class="subitem3"><a href="#">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Women </a>
			<ul class="cute">
				<li class="subitem1"><a href="#">Cute Kittens </a></li>
				<li class="subitem2"><a href="#">Strange Stuff </a></li>
				<li class="subitem3"><a href="#">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Kids</a>
			<ul class="cute">
				<li class="subitem1"><a href="#">Cute Kittens </a></li>
				<li class="subitem2"><a href="#">Strange Stuff </a></li>
				<li class="subitem3"><a href="#">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Accesories</a>
			<ul class="cute">
				<li class="subitem1"><a href="#">Cute Kittens </a></li>
				<li class="subitem2"><a href="#">Strange Stuff </a></li>
				<li class="subitem3"><a href="#">Automatic Fails </a></li>
			</ul>
		</li>
				
		<li class="item4"><a href="#">Shoes</a>
			<ul class="cute">
				<li class="subitem1"><a href="#">Cute Kittens </a></li>
				<li class="subitem2"><a href="#">Strange Stuff </a></li>
				<li class="subitem3"><a href="#">Automatic Fails </a></li>
			</ul>
		</li>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">LOREM IPSUM</h6>
						<a href="#" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">TAGS</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">BEST SELLERS</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="#" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="/Application/Home/View//Public/images/f3.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >Lorem ipsum dolor sit
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
					<img class="img-responsive" src="/Application/Home/View//Public/images/pi3.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div>
			</div>
				</div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	




						<div class="flexslider">
							<ul class="slides">
				
							
									<li data-thumb="/Application/Home/View//Public/images/<?php echo ($v["photo"]); ?>" >
										<img  src="/Application/Home/View//Public/images/<?php echo ($v["photo"]); ?>"  />
									</li>
								<li data-thumb="/Application/Home/View//Public/images/s2.jpg">
									<img src="/Application/Home/View//Public/images/si1.jpeg" />
								</li>
								<li data-thumb="/Application/Home/View//Public/images/s3.jpeg">
									<img src="/Application/Home/View//Public/images/si2.jpeg" />
								</li>
								<li data-thumb="/Application/Home/View//Public/images/s1.jpg">
									<img src="/Application/Home/View//Public/images/s12.jpeg" />
								</li>
							</ul>
						</div>
<!-- FlexSlider -->
  <script defer src="/Application/Home/View//Public/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/Application/Home/View//Public/css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>












					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
					<?php if(is_array($pro)): foreach($pro as $key=>$v): ?><h4 class="name"><?php echo ($v["name"]); ?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
								<script type="text/javascript">	
									$(function(){
										var num = $(".comments-top-top").index()+1;
										$("#RevSma").html(num+" customer review ");
										$("#RevNum").html("Reviews("+num+")");
									})																		
								</script>
									<a href="#" id="RevSma"></a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">$<span class="price"><?php echo ($v["price"]); ?></span></h5>
							<div class="available">
								
								<ul>
									<li>Color
										<select>
											<option>$v3</option>
									</select></li>
								<li class="size-in">Size<select>
													<option>$v3</option>
								</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>TAG</span>
								<span class="women1">:<?php echo ($v["tag"]); ?></span></li>
								<li><span>SKU</span>
								<span class="women1">: <?php echo ($v["sku"]); ?></span></li>
							</ul>
								<select class="count">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<a href="javascript:;" class="addCar add-cart item_add">ADD TO CART</a>
								<input type="hidden" class="id" name="" value="<?php echo ($v["id"]); ?>"><?php endforeach; endif; ?>				
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Description </a></li>
					<li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
					<li><a data-content="television" href="#0" class="selected " id="RevNum"></a></li>
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
									  <p > <?php echo ($v["description"]); ?> </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>         
							        </div>

</li>
<li data-content="cinema" >
		<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >
							</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >
							</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

</li>
<li data-content="television" class="selected">
						<div class='comments-top-top'>
							<div class='top-comment-left'>
								<img class='img-responsive' src='/Application/Home/View//Public/images/co.png' alt=''>
								<h6>听说名字起的长特别牛!</h6>
							</div>
							<div class='top-comment-right'>
								<h4><a href='#' style="color:red">	楼主</a> </h4>
								
								<p>这副眼镜不错!</p>
							</div>
							<div class='clearfix'> </div>
							<a class='add-re' href='javascript:;'>Reply to him or her</a>
							<!--ADD REVIEW 功能就先不写了! 没必要!-->
							<form>
								<textarea class="reply" style="background-color:#ffffff;width: 600px;height: 100px;display: none;" >回复:听说名字起的长特别牛!</textarea>
							</form>
						</div>

						<div class='comments-top-top'>
							<div class='top-comment-left'>
								<img class='img-responsive' src='/Application/Home/View//Public/images/co.png' alt=''>
								<h6>马什么梅?</h6>
							</div>
							<div class='top-comment-right'>
								<div style="background-color:gray">
									<h4><a href='#' style="color:orange">@楼主</a>:这副眼镜不错!</h4>
								</div>
								
								<p>不错个头</p>
							</div>
							<div class='clearfix'> </div>
							<a class='add-re' href='javascript:;'>Reply to him or her</a>
							<!--ADD REVIEW 功能就先不写了! 没必要!-->
							<form>
								<textarea class="reply" style="background-color:#ffffff;width: 600px;height: 100px;display: none;">回复:马什么梅?</textarea>
							</form>
						</div>

						<div class='comments-top-top'>
							<div class='top-comment-left'>
								<img class='img-responsive' src='/Application/Home/View//Public/images/co.png' alt=''>
								<h6>追风少年</h6>
							</div>
							<div class='top-comment-right'>
								<div style="background-color:gray">
									<h4><a href='#' style="color:orange">@马什么梅?</a>:不错个头</h4>
								</div>
								<p>马冬梅</p>
							</div>
							<div class='clearfix'> </div>
							<a class='add-re' href='javascript:;'>Reply to him or her</a>
							<!--ADD REVIEW 功能就先不写了! 没必要!-->
							<form>
								<textarea class="reply" style="background-color:#ffffff;width: 600px;height: 100px;display: none;">回复:追风少年</textarea>
							</form>
						</div>

</li>
<!-- php foreach结束 -->
<div class="clearfix"></div>
	</ul> 
</div> 
			<!---->
		       
		        	<div class="top-product">
					<h3 class="real">Related Products</h3>
		        	
		        		<div class="col-md-4 chain-grid  simpleCart_shelfItem">
		        			<div class="grid-span-1">
	   		     		<a  href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/pi10.jpg" alt=" ">
	   		     		</a>
	   		     	</div>
	   		     		<div class="grid-chain-bottom ">
	   		     			<h6><a href="single.html">Sun Glasses    #1</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="price-at">
		   		     				<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">
								<a class="add1 item_add" href="<?php echo U('Checkout/addCar',array('pid'=>$SinPid));?>">ADD TO CART <i> </i></a>
								<a class="add2" href="#"><i> </i></a>
								<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     		
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid simpleCart_shelfItem">
					<div class="grid-span-1">
	   		     		<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/pi6.jpg" alt=" ">
</a>
	   		     		</div>
	   		     		<div class="grid-chain-bottom ">
	   		     			<h6><a href="single.html">Stylish Glasses    #1</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="price-at">
		   		     				<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 65.00</span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">
								<a class="add1 item_add" href="<?php echo U('Checkout/addCar',array('pid'=>$SinPid));?>">ADD TO CART <i> </i></a>
								<a class="add2" href="#"><i> </i></a>
								<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     	</div>
	   		     	<div class="col-md-4 chain-grid simpleCart_shelfItem">
					<div class="grid-span-1">
	   		     		<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/pi5.jpg" alt=" ">
</a>
	   		     		</div>
	   		     		<div class="grid-chain-bottom ">
	   		     			<h6><a href="single.html">Specs Glasses    #1</a></h6>
	   		     			<div class="star-price">
	   		     				<div class="price-at">
		   		     				<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 85.00</span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">
								<a class="add1 item_add" href="<?php echo U('Checkout/addCar',array('pid'=>$SinPid));?>">ADD TO CART <i> </i></a>
								<a class="add2" href="#"><i> </i></a>
								<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     
		        	</div>
	   		     	<div class="clearfix"> </div>
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
		$('.add-re').click(function(){
			//回复
			$(this).next().find("textarea").css('display','block');
		})
	});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<!---->
</body>
</html>