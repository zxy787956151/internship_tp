<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
	body{
		overflow: hidden;
	}
	#login{
		display:none;
		overflow: hidden;
		width:300px;
		height:600px;
		background:#fff;
		position: absolute;
		top:0%;
		left:50%;
		transform: translate(-50%,-50%);
		box-shadow:5px 5px 5px #555;
		transition: top 1s;
	}
	#logintop{
		width:400px;
		height:580px;
		transform:rotate(65deg);
		position: absolute;
		top:-30%;
		left:-55%;
		overflow: hidden;
	}
	#logintop img{
		width:700px;
		height:500px;
		transform: rotate(-65deg);
		overflow: hidden;
		position: absolute;
		left:5%;
	}
	.ico{
		position: absolute;
		left:15%;
		transform: translate(-50%,0);
		width:30px;
		height:30px;
	}
	#useico{
		bottom:35%;
		background:url("/Application/Admin/View//Public/images/login/username.png");
	}
	#passico{
		bottom:25%;
		background:url("/Application/Admin/View//Public/images/login/password.png");
	}
	.input{
		position: absolute;
		left:55%;
		transform: translate(-50%,0);
		width:200px;
		height:30px;
		outline: none;
		border:transparent;
		border-bottom:1px solid #ccc;
		line-height:30px;
		color:#888;
	}
	#username{
		bottom:35%;
	}
	#password{
		bottom:25%;
	}
	.submit{
		position: absolute;
		bottom:10%;
		left:50%;
		transform: translate(-50%,0);
		width:200px;
		height:40px;
		border-radius:40px;
		background:#fff;
		border:1px solid #4584da;
		color:#4584da;
		font-size:1.2em;
		font-family:"Consolas";
		font-style: italic;
		cursor: pointer;
	}
	.submit:hover{
		background:#4584da;
		border:1px solid #4584da;
		color:#fff;
	}
	#mask{
		width:120%;
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		transition: filter 1s;
	}
	#button{
		width:140px;
    	height:140px;
    	background:url("/Application/Admin/View//Public/images/login/login.png");
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		cursor:pointer;
	}
	</style>
	<script type="text/javascript" src="/Application/Admin/View//Public/js/jquery.js"></script>
	<script type="text/javascript">
	$(function(){
        'use strict';
        var mask = $('#mask');
        var button = $('#button');
        var login = $('#login');
        function showBg(){
            mask.css("filter","blur(20px)");
            login.fadeIn(2000);
            login.css("top","50%");
            button.fadeOut(500);
        }
        function hideBg(){
            mask.css("filter","blur(0px)");
            login.fadeOut(1000);
            login.css("top","0%");
            button.fadeIn(2000);
        }
        button.on('click',showBg);
        mask.on('click',hideBg);
    })
	</script>
</head>
<body>
	<img src="/Application/Admin/View//Public/images/login/bg.jpg" alt="" id="mask">
	<div id="login">
		<div id="logintop">
			<img src="/Application/Admin/View//Public/images/login/bg.jpg" alt="">
		</div>
		<span class="ico" id="useico"></span>
		<span class="ico" id="passico"></span>

		<form action="<?php echo U('Login/runLogin');?>" method="post">
			<input type="text" name="username" class="input" id="username" placeholder="用户名">
			<input type="password" placeholder="用户密码" name="password" class="input" id="password">
            <!-- <input type="text"  name="verify" class="input" id="exampleInputCode" placeholder="验证码">
            <div>
                <a href="javascript:void(0)"><img id="mask" class="verify" src="<?php echo U('login/verify');?>" alt="点击刷新"/></a>
            </div> -->
			<input type="submit" name="submit" class="submit" value="Login"></input>
		</form>
	</div>
	<div id="button"></div>

	<script>
	    $(function(){
	        $(".verify").click(function(){
	            var src = "<?php echo U('login/verify');?>";
	            var random = Math.floor(Math.random()*(1000+1));
	            $(this).attr("src",src+"&random="+random);

	        });
	    })
	</script>	
</body>
</html>