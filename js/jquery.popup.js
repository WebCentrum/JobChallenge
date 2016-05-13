/*

JOB CHALLENGE SCRIPTS

*/

$(document).ready(function() {
	$(".event_popup_open").click(function () {
		$(".ui_popup_overlay").addClass('opened');
		
		// WILL USE CONTENT OF CLICKED ELEMENT + ITSELF (user for .UI_PERSON)
		if($(this).hasClass('popup_use_content')){
			content = $(this).clone();
			$(".ui_popup_overlay .window").append('<div class="dynamic_content"></div>');
			$(".ui_popup_overlay .window .dynamic_content").append(content);
			$(".ui_popup_overlay .window .dynamic_content").children().removeClass('event_popup_open');
		}
	});

	$(".ui_popup_overlay").click(function () {
		$(this).removeClass('opened');
		$(".ui_popup_overlay .window .dynamic_content").remove();
	});

	$(".ui_popup_overlay div.more a.secondary").click(function () {
		$(this).removeClass('opened');
		$(".ui_popup_overlay .window .dynamic_content").remove();
	});
	
	$(".ui_popup_overlay div.more a.close").click(function () {
		$(this).removeClass('opened');
		$(".ui_popup_overlay .window .dynamic_content").remove();
	});

	$(".ui_popup_overlay div.more button").click(function () {
		$(this).removeClass('opened');
		$(".ui_popup_overlay .window .dynamic_content").remove();
	});
  
  // Blocks href attribute for button as a link
  $(".event_popup_open.more").click(function() {
    return false;
  });
});
