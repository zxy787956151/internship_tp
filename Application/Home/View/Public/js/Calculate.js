// JavaScript Document
$(function(){
var lock = false;
$(".checkout").click(function(){		
	$(".checkout").live('click',function(){		//live 发生某个事件（ click事件） 
		if (lock) {return;}
		lock = true;
		var allPrice = $(".allPrice").val();
		$.ajax({	
			type: "POST",//要求为String类型的参数，请求方式（post或get）默认为get。注意其他http请求方法，例如put和delete也可以使用，但仅部分浏览器支持。
			url: "Home/Product/checkout?action=ajax",//要求为String类型的参数，（默认为当前页地址）发送请求的地址。
			//tp里ajax连接这么写!
			dataType: "json",	 // 要求为String类型的参数，预期服务器返回的数据类型。如果不指定，JQuery将自动根据http包mime信息返回responseXML或responseText，并作为回调函数参数传递。可用的类型如下：
			// 						xml：返回XML文档，可用JQuery处理。
			// 						html：返回纯文本HTML信息；包含的script标签会在插入DOM时执行。
			// 						script：返回纯文本JavaScript代码。不会自动缓存结果。除非设置了cache参数。注意在远程请求时（不在同一个域下），所有post请求都将转为get请求。
			// 						json：返回JSON数据。
			// 						jsonp：JSONP格式。使用SONP形式调用函数时，例如myurl?callback=?，JQuery将自动替换后一个“?”为正确的函数名，以执行回调函数。
			// 						text：返回纯文本字符串。
								
			data: {"allPrice":allPrice},/* 要求为Object或String类型的参数，
												发送到服务器的数据。如果已经不是字符串，将自动转换为字符串格式。
												get请求中将附加在url后。防止这种自动转换，可以查看　　processData选项。
												对象必须为key/value格式，例如{foo1:"bar1",foo2:"bar2"}转换为&foo1=bar1&foo2=bar2。
												如果是数组，JQuery将自动为不同值对应同一个名称。例如{foo:["bar1","bar2"]}转换为&foo=bar1&foo=bar2。
												*/
			
			beforeSend: function(){				//beforeSend用于在向服务器发送请求前执行一些动作。
				// $('<div id="msg" />').addClass("loading").html("正在登录...").css("color","#999").appendTo('.sub');
				// alert('加入购物成功!');
			},
			success: function(json){
				lock = false;
				if(json.success==1){
					json.success=0;
					// $(".img_child").css({"opacity":"1","left":"400%","top":"-60%","width":"0","height":"0"});
					alert("请您支付"+json.allPrice);
				}else if(json.success==2){
					alert("已结算");
				}else{	
					alert("AjaxWrong!!");
				}
			}
		});
		// event.stopPropagation();
	});
		// event.stopPropagation();

});
});