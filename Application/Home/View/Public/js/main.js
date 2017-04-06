$(function(){
	$(window).on('scroll',function(){
	if($(window).scrollTop() < 150){
		$(".container-left").css('position','absolute');
		$(".container-left").css('top','0px');
	}
	else if($(window).scrollTop()>150){
		$(".container-left").css('position','fixed');
		$(".container-left").css('top','20px');
	}
	});
});

