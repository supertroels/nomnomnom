jQuery(document).ready(function($) {

	var pop = $('#cookie-popup');

	pop
	.find('#cookie-accept')
	.click(function(event){
		event.preventDefault();
		$.cookie('wp_accepted_cookies', 'yes');
		pop.addClass('accepted');
	})

});