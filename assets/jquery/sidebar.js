$(document).ready(function(){
	
	// $('.submenu').hide();
	$('.has-submenu').click(function(){
		var $icon = $(this).find('.icons-add');
		$icon.html() == "add" ? $icon.html('remove') : $icon.html('add');
		$(this).find('.submenu').slideToggle('slow');
	});	

	$('.open-nav').click(function() {
		$('.sidebar').toggleClass('toggled');
	});

})