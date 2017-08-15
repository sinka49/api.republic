
$(document).ready(function(){
$('.owl-carousel-tour').owlCarousel({
		items: 6,
		margin: 26,
		dots: false,
		loop: true,
		margin: 20,
		nav: false,
		autoplayTimeout: 4000,
		smartSpeed: 1000
});
	$('.selected-tour-carousel').owlCarousel({
		items:1,
		loop:false,
		margin:10,
		dots: false,
		URLhashListener:true,
		autoplayHoverPause:true,
		mouseDrag:false,
		startPosition: 'URLHash'
	});
});