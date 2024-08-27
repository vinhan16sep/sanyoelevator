$(document).ready(function(){
  $('.slick_slider').slick({
	autoplay: true,
	infinite: true,
	arrows: true,
	slidesToShow: 15, 
	slidesToScroll: 3,
	responsive: [{
		breakpoint: 768,
	settings: {
		slidesToShow: 6,
	slidesToScroll: 2,
	}
	}, {
	breakpoint: 480, 
		settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }]
  });
});