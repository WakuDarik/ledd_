document.querySelector('.glider') ? new Glider(document.querySelector('.glider'), {
	slidesToShow: 1,
	dots: '#dots',
	draggable: true,
	arrows: {
		prev: '.glider-prev',
		next: '.glider-next'
	}
}) : null

var config = {
	elementID: 'touchSideSwipe',
	elementWidth: 335, //px
	elementMaxWidth: .88, // *100%
	sideHookWidth: 0, //px
	moveSpeed: 0.2, //sec
	opacityBackground: 0.8,
	shiftForStart: 50, // px
	windowMaxWidth: 767.98, // px
}

var touchSideSwipe = new TouchSideSwipe(config);
