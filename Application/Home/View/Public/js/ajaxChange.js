function ajaxChange(id,num){
		//alert(productid);
		//alert(num);
		//通过ajax将对应商品的数量进行修改操作
		var url = "Home/Product/ajaxChange?action=ajax";
		var data = {'id':id,'num':num};
		var success = function(response) {
			if(response.errno == 0){
				$("#allPrice"+id).val(response.allPrice);
				//response. 比 json.好用多了
			}
		}
		$.post(url,data,success,"json");
	}