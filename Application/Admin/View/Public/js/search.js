function search(){
	var type = $("#type").val();
	var key = $("#key").val();
	var url = "Admin/"+type+"/index?action=search&time="+Date.parse(new Date());
	var data = {'type':type,'key':key};
	var success = function(response) {
		if(response.errno == 0){
			alert("ajaxOk!");
		}
	}
	$.post(url,data,success,"json");
}