function ajaxChange(id,numId,type){
		//不加锁貌似没bug
		//通过ajax将对应商品的数量进行修改操作
		var url = "Home/Product/ajaxChange?action=ajax";
		var price = document.getElementsByClassName('checkout-total');
		var allPrice = 0;
		if (type=='+') {
			var num = parseInt($("#proCount"+numId).val())+1;
		}else if(type=='-'){
			var num = parseInt($("#proCount"+numId).val())-1;
		}
		var data = {'id':id,'num':num};
		var success = function(response) {
			if(response.errno == 0){
				$("#proPrice"+numId).text(response.allPrice);
				for (var i = price.length - 1; i >= 0; i--) {
					allPrice += parseInt(price[i].innerText);
				}
				$(".allPrice").text(allPrice);
				//response. 比 json.好用多了
			}
		}
		$.post(url,data,success,"json");
	}