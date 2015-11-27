(function($) {
	
	//slick slider
	$(function(){
		$('.front-page-slider').slick({
			autoplay: true,
			fade: true,
			autoplaySpeed: 1000
		});
	});

	// number counter
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

	// out client carousal
	$(function(){
		$('.our-client').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				}
			},
			{
				breakpoint: 320,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				}
			}]

		});
	});

})( jQuery );
