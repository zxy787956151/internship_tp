<?php if (!defined('THINK_PATH')) exit();?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Product :: w3layouts</title>
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
<div class="back">
	<h2>Produts</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  <div class="price-grid">
					    <div class="of-left">
						<h3 class="cate cate-on">PRICE</h3>
					</div>
	  <ul class="dropdown-menu1">
            <li><a href="#">
                <p>
                      <label for="amount" class="amount">Range:</label>
                     <input type="text" id="amount" style="border: 0; color: #ff5d56; font-weight: bold;" />
                         
						  </p>
                
                   <div id="slider-range"></div>
                </a></li>
				
          </ul>
		  <a  class="go" href="single.html">GO</a>
		  	<div class="clearfix"> </div>
<!---->
 <script type="text/javascript" src="/Application/Home/View//Public/js/jquery-ui.min.js"></script>

      <link rel="stylesheet" type="text/css" href="/Application/Home/View//Public/css/jquery-ui.css">

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
 $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 100, 400 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>


<!---->
		</div>
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIES</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">Men </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Women </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Kids</a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Accesories</a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
			</ul>
		</li>
				
		<li class="item4"><a href="#">Shoes</a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
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
						<a href="single.html" class="shop-now">SHOP NOW</a>
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
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/f1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/f2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="/Application/Home/View//Public/images/f3.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
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
				<a href="single.html" ><img class="img-responsive" src="/Application/Home/View//Public/images/n7.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				
		
			<!---->
			
				<!---->
				<div class="col-md-9 product-price1">
					<div class="mens-toolbar">
						<p class="showing">Showing 1–9 of 21 results</p>
	                 <div class="sort">
			            <select>
			                  <option value=""> Sorting By Rate</option>
			                    <option value="">Sorting By Color </option>
			                    <option value="">Sorting By Price </option>
			            </select>
			          
	    		     </div>
    	      
                	<div class="clearfix"></div>		
		        </div>
		        <div class="product-right-top">
		        

	   		     	<?php if(is_array($PageNow)): foreach($PageNow as $key=>$v): ?><div class="col-md-4 chain-grid simpleCart_shelfItem" id="br">
						
						<div class="grid-span-1">
		   		     		<a href="<?php echo U('Single/index');?>&pid=<?php echo ($v["id"]); ?>"><img class="img-responsive " src="/Application/Home/View//Public/images/n1.jpg" alt=" ">
							<div class="link">
		   		     			<ul >
											<li><i class="glyphicon glyphicon-search"> </i></li>
											
								</ul>
		   		     		</div><span>NEW</span></a>
		   		     		</div>
		   		     		<div class="grid-chain-bottom ">
		   		     			<a href="<?php echo U('Single/index');?>&pid=<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a>
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
											<span class="item_price">$<?php echo ($v["price"]); ?></span>
										</div>
		   		     				<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="<?php echo U('Checkout/addCar',array('pid'=>$v[pid]));?>">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
		   		     		</div>
		   		     		<br/>
		   		     	</div><?php endforeach; endif; ?>

		        </div>
		        </div>	
	        	<ul class="start">
					<li class="arrow"><a href="<?php echo U('Product/index',array('pd'=>0));?>">首页</a></li>
					&nbsp;&nbsp;&nbsp;
					<li class="arrow"><a href="<?php echo U('Product/index',array('pd'=>'-'));?>">Up</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php $__FOR_START_32455__=1;$__FOR_END_32455__=$pagGlobals+1;for($i=$__FOR_START_32455__;$i < $__FOR_END_32455__;$i+=1){ ?><li class="arrow"><a href="<?php echo U('Product/index',array('pd'=>$i-1));?>"><?php echo ($i); ?></a></li>
						&nbsp;&nbsp;<?php } ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="arrow"><a href="<?php echo U('Product/index',array('pd'=>'+'));?>">Down</a></li>
					&nbsp;&nbsp;&nbsp;
					<li class="arrow"><a href="<?php echo U('Product/index',array('pd'=>'last'));?>">尾页</a></li>
				</ul>
		        
				<div class="clearfix"> </div>
				</div>
				
			<div class="clearfix"> </div>
			
				<div class="shipping">
					<div class="col-md-3 col-md1">
						<div class=" phone">
						
							<div class="num">
								<span>8(802)234-5678</span>
								<p>Monday - Saturday: 8am - 5pm PST</p>
							</div>
							<i class="phone-in"> </i>
							<div class="clearfix"> </div>
						</div>
					
					</div>
					<div class="col-md-5 col-md2">
						<div class=" phone1">
					
							<i class="phone-in1"> </i>
							<div class="num1">
								<span>Free Shipping</span>
								<p>on all orders over $99</p>
							</div>
							<a class="learn-in" href="single.html">Learn More</a>
							<div class="clearfix"> </div>
						</div>
			
					</div>
					<div class="col-md-4 col-md3">
						<div class=" phone2">
					
							
							<div class="num2">
								<span>Crazy Sale!</span>
								<p>on selected items</p>
							</div>
							<a class="learn-in1" href="single.html">Learn More</a>
							<div class="clearfix"> </div>
						</div>
			</div>
			<div class="clearfix"> </div>
			</div>
					
				</div>
				
			<!---->
		
		</div>
		<div class="bottom-grid1">
					
					<div class="fit1">
						<h3>HAPPY SHOPPING</h3>
						<p>Lorem Ipsum sit amet consectuer adipiscing elit
sed diam nonummy nibh euismod</p>
					</div>
				</div>
		
<!---->

<script src="/Application/Home/View//Public/js/simpleCart.min.js"> </script>
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