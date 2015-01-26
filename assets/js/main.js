jQuery(document).ready(function($) {
	
	
	if($.cookie('wp_accepted_cookies') != 'yes'){
	
		var pop = $('#cookie-popup');
	
		pop
		.removeClass('accepted')
		.find('#cookie-accept')
		.click(function(event){
			event.preventDefault();
			$.cookie('wp_accepted_cookies', 'yes', {expires: 1095, path: '/'});
			pop.addClass('accepted');
		})

	}

});