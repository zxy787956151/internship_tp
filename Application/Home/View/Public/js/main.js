$(function(){
	$(window).on('scroll',function(){
	if($(window).scrollTop() < 850){
		$(".container-left").css('display','none');
	}
	else if($(window).scrollTop()>850){
		$(".container-left").css({'display':'block','position':'fixed','top':'20px'});
	}
	});
});

