// JavaScript Document
//迫切的需要写一个清楚缓存 和清楚历史记录里的那个全部清除一样功能的!!!
$(function(){
var lock = false;

//修改角色列表(js)
var updateRole = document.getElementsByClassName('updateRole');

for(i=0;i<updateRole.length;i++){
        updateRole.item(i).onclick=function(){	
        	var loading = document.getElementsByClassName('loading');
			var oppositeRolename = document.getElementsByClassName('oppositeRolename');
			var roleNameClass =  document.getElementsByClassName("roleName");
			var idClass = document.getElementsByClassName("roleId");
        	if (lock) {return;}
			lock = true;
            var which=this.getAttribute("index");
            var rolename = roleNameClass[which].value;
            var id = idClass[which].value;

            var ajaxTimeoutTest =$.ajax({	
				type: "POST",//要求为String类型的参数，请求方式（post或get）默认为get。注意其他http请求方法，例如put和delete也可以使用，但仅部分浏览器支持。
				url: "Admin/Access/update_role?action=ajax",//要求为String类型的参数，（默认为当前页地址）发送请求的地址。
				//tp里ajax连接这么写!
				dataType: "json",	 // 要求为String类型的参数，预期服务器返回的数据类型。如果不指定，JQuery将自动根据http包mime信息返回responseXML或responseText，并作为回调函数参数传递。可用的类型如下：
				// 						xml：返回XML文档，可用JQuery处理。
				// 						html：返回纯文本HTML信息；包含的script标签会在插入DOM时执行。
				// 						script：返回纯文本JavaScript代码。不会自动缓存结果。除非设置了cache参数。注意在远程请求时（不在同一个域下），所有post请求都将转为get请求。
				// 						json：返回JSON数据。
				// 						jsonp：JSONP格式。使用SONP形式调用函数时，例如myurl?callback=?，JQuery将自动替换后一个“?”为正确的函数名，以执行回调函数。
				// 						text：返回纯文本字符串。
									
				data: {"id":id,"rolename":rolename},/* 要求为Object或String类型的参数，
													发送到服务器的数据。如果已经不是字符串，将自动转换为字符串格式。
													get请求中将附加在url后。防止这种自动转换，可以查看　　processData选项。
													对象必须为key/value格式，例如{foo1:"bar1",foo2:"bar2"}转换为&foo1=bar1&foo2=bar2。
													如果是数组，JQuery将自动为不同值对应同一个名称。例如{foo:["bar1","bar2"]}转换为&foo=bar1&foo=bar2。
													*/
				
				beforeSend: function(){				//beforeSend用于在向服务器发送请求前执行一些动作。
            		loading[which].style.display="inline-block";
				},
				success: function(json){
					lock = false;
					if(json.success==1){
						loading[which].style.display="none";
						oppositeRolename[which].innerHTML = json.rolename;
						json.success=0;
					}else{
						loading[which].style.display="none";
						// alert("AjaxWrong!!");
					}
				},
			// 	complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
			// 　　　　if(status=='timeout'){//超时,status还有success,error等值的情况
			//  　　　　　 ajaxTimeoutTest.abort();
			// 　　　　　  alert("超时");
			// 　　　　}
			// 　　},
			});
    	}
 	}


});

//修改权限(jq),这是自定义函数要写在页面加载的外面!
function updatePerm(id,content,key,lock){
		//第三参为'排序'传的键名,不加锁貌似没bug
		var url = "Admin/Access/update_perm?action=ajax&time="+Date.parse(new Date());
		var data = {'id':id,'content':content};
		//这个的beforeSend如何写? 加入.post里也不好使!
		var success = function(response) {
			if(response.errno == 0){
				//response. 比 json.好用多了
				if (response.key!=null) {
					for (var i=0; i<response.key.length; i++) {
						$('#oppositePermname'+response.key[i]).html(response.value[i]);
					}
				}
			}
		}
		$.post(url,data,success,"json");
	}
//删除说啥不用ajax了,太累了~!