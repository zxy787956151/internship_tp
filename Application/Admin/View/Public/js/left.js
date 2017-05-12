$(function(){
	var nav_li = $('.nav-li');
	var nav_main1 = $('#nav-main1'),
		nav_main2 = $('#nav-main2'),
		nav_main3 = $('#nav-main3'),
		nav_main4 = $('#nav-main4'),
		nav_main5 = $('#nav-main5');
	var nav_li1 = $('#nav-li1'),
		nav_li2 = $('#nav-li2'),
		nav_li3 = $('#nav-li3'),
		nav_li4 = $('#nav-li4'),
		nav_li5 = $('#nav-li5');
	nav_main1.click(function(){
		nav_li.css("height","0");
		nav_li1.css("height","70px");
	});
	nav_main2.click(function(){
		nav_li.css("height","0");
		nav_li2.css("height","75px");
	});
	nav_main3.click(function(){
		nav_li.css("height","0");
		nav_li3.css("height","175px");
	});
	nav_main4.click(function(){
		nav_li.css("height","0");
		nav_li4.css("height","175px");
	});
	nav_main5.click(function(){
		nav_li.css("height","0");
		nav_li5.css("height","175px");
	});
});