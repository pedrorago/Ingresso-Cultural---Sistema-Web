$(function() {

	$('.slide-container').slick({
		autoplay: true,
		autoplaySpeed: 2000,
		prevArrow: false,
		nextArrow: false,
		dots:true
	});


	$('.calendarioContainer').slick({
		slidesToShow: 14,
		prevArrow:"<i class='ion-android-arrow-back arrowsPre arrowLEFT'></i>",
		nextArrow:"<i class='ion-android-arrow-forward arrowsPre arrowRIGHT'></i>",

		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});


	$('.AconteceuSlideContainer').slick({
		slidesToShow: 4,
		prevArrow:"<i class='ion-android-arrow-back arrows1 arrowBack'></i>",
		nextArrow:"<i class='ion-android-arrow-forward arrows1 arrowNext'></i>",

		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});
});