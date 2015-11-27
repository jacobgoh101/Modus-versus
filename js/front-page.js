(function($) {
	
	//slick slider
	$(function(){
		$('.front-page-slider').slick({
			autoplay: true,
			fade: true,
			autoplaySpeed: 1000
		});
	});

	var number_counter_done = false;
	$(window).scroll(function() {
		if ($(this).scrollTop() > $(".about-why img").position().top && !number_counter_done) {
			$('.js-counter').each(function () {
				$(this).prop('Counter',0).animate({
					Counter: $(this).text()
				}, {
					duration: 3000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			});
			number_counter_done = true;
		}   
	});

})( jQuery );
