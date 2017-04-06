$(function(){
	var menumain = $('.menumain');
	var cute = $('.cute');
	menumain.click(function(){
		cute.css('height','0');
		$(this).parent().find('ul').css('height','110px')
	});
});