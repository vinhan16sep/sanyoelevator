$(document).ready(function(){
  $('.slick_slider').slick({
	autoplay: true,
	infinite: true,
	arrows: true,
	slidesToShow: 10,
	slidesToScroll: 3,
	responsive: [{
		breakpoint: 768,
	settings: {
		slidesToShow: 4,
	slidesToScroll: 2,
	}
	}, {
	breakpoint: 480,
		settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }]
  });
});
