/*

JOB CHALLENGE SCRIPTS

*/

$(document).ready(function(){
	var lastId,topMenu = $("#anchor_menu"),
	topMenuHeight = topMenu.outerHeight(),
	menuItems = topMenu.find("li a"),
	scrollItems = menuItems.map(function(){
		var item = $(this).attr("href");
		if (item.length){
			return item;
		}
	});
	menuItems.click(function(e){
		var href = $(this).attr("href"),
			offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		$(this).parent().siblings().removeClass('active');
		$(this).parent().addClass('active');

		$('html, body').stop().animate({ 
			scrollTop: offsetTop
		}, 500);
		e.preventDefault();
	});

	$(window).scroll(function(){
		$('a.anchor').each(function(){
			if($(this).visible(false)){
				var id = $(this).attr("id");
				$("#anchor_menu li").siblings().removeClass('active');
				$("#anchor_menu li a").filter("[href='#"+id+"']").parent().addClass("active");
			}
		});
	});
});