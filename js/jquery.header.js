/*

JOB CHALLENGE SCRIPTS

*/

$(document).ready(function() {
	$(".site_header .fixed .hotdog").click(function () {
		$(this).siblings('.menu').toggleClass('opened');
		$('.site_header .fixed').toggleClass('opened');
		$(this).toggleClass('active')
	});

	$(".site_header ul.menu li .toggle").click(function () {
		$(this).toggleClass('active');
		$(this).parent().toggleClass('opened')
	});
});


var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.site_header .fixed').outerHeight();

$(window).scroll(function(event){
	didScroll = true;
});

setInterval(function() {
	if (didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();
	if(Math.abs(lastScrollTop - st) <= delta)
		return;

	if (st > lastScrollTop && st > navbarHeight){
		$('.site_header .fixed').removeClass('nav-down').addClass('nav-up');
		$('.site_header ul.links').removeClass('nav-down').addClass('nav-up');
	} else {
		if(st + $(window).height() < $(document).height()) {
			$('.site_header .fixed').removeClass('nav-up').addClass('nav-down');
			$('.site_header ul.links').removeClass('nav-up').addClass('nav-down');
		}
	}
	lastScrollTop = st;
}

/*

SMOOTH SCROLL

*/

$(document).ready(function(){
	$('a.smooth[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 400, 'swing', function () {
			window.location.hash = target;
		});
	});
});

/*

DISABLE MAIN MENU SHADOW IF SECOND MENU IS FIXED

*/
$(document).ready(function(){
	$(document).scroll(function() {
		if($(".site_header .submenu_wrapper ul.links").hasClass('skrollable-after')){
			$('.site_header .fixed').addClass('noshadow');
		}
		else {
			$('.site_header .fixed').removeClass('noshadow');
		}
	});
	
});