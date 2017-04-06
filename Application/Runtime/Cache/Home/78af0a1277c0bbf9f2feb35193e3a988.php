<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>checkout</title>
	<link rel="stylesheet" href="/Application/Home/View/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/style.css">
	<link rel="stylesheet" href="/Application/Home/View/Public/css/head.css">
	<script type="text/javascript" src="/Application/Home/View/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Application/Home/View/Public/js/Calculate.js"></script>
	<script type="text/javascript" src="/Application/Home/View/Public/js/ajaxChange.js"></script>
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
		<table class="table table-striped">
			<thead>
				<tr>
					<th>商品信息</th>
					<th>数量</th>
					<th>金额</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($model)): foreach($model as $plvk=>$plvv): ?><tr>
						<td>
							<img src="/Application/Public/Uploads/<?php echo ($plvv["photourl"]); echo ($plvv["photoname"]); ?>" alt="">
							<p><?php echo ($plvv["name"]); ?>
							</p>
							<span class="checkout-type">颜色分类：黑色玫瑰-送膜</span>
						</td>
						<td>
							<input type="button" value="-" class="reduce" onclick="ajaxChange(<?php echo $plvv['id']?>,<?php echo $plvk+1?>,this.value)">
							<input type="text" id="proCount<?php echo ($plvk+1); ?>" class="pro-num" value="<?php echo ($plvv["count"]); ?>">
							<input type="button" value="+" class="add" onclick="ajaxChange(<?php echo $plvv['id']?>,<?php echo $plvk+1?>,this.value)">
						</td>
						<td>￥<span id="proPrice<?php echo ($plvk+1); ?>" class="checkout-total"><?php echo ($plvv["price"]); ?></span></td>
						<td>
							<a href="<?php echo U('Product/carDelete',array('id'=>$plvv['id']));?>" class="delete">删除</a>
							<!-- <a href="javascript:;" class="prohibit">暂时禁选</a> -->
						</td>
					</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		<div class="balance">
			<div class="balance-button">
				<input type="button" value="结算" class="checkout" />
			</div>
			<div class="balance-total">
				合计:<span class="allPrice">￥<?php echo ($allPrice); ?></span>
			</div>
			<!-- <div class="balance-num">
				商品<span>4</span>件
			</div> -->
		</div>
	</div>
<script src="/Application/Home/View/Public/js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	var reduce = $('.reduce');
	var add = $('.add');
	var pro_num = $('.pro-num');
	var num_value = pro_num.val();
	add.click(function(){
		num_value++;
		$(this).parent().find(':text').val(num_value);
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