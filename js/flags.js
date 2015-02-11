$(function() {
	/* Flags expander */
	var flagContainer = $('#flags-ddcontent');
	var flagHolder = $('.flags-dd');
		
	flagContainer.find('a').mousedown(function(){
		var flag = $(this).attr('data-lang');
		setCookie('flang',flag,1,'index.php','.'+SITEDOMAIN);
		
	});
	
	flagHolder.on('click', function(){
		if(!(flagHolder.hasClass('clicked'))) {
			flagHolder.addClass('clicked');
		}
		flagContainer.fadeIn();
	});

	flagHolder.on('mouseenter', function(){
		if(flagHolder.hasClass('clicked')) {
			flagContainer.fadeIn();
		}
	});

	flagHolder.on('mouseleave', function(){
		flagContainer.hide();
	});
});