var tablet = 768;
var desktop = 992;
var large = 1200;

var imgContainerWidth = 0;
var imgContainerHeight = 0;

var menuImgHeightRatioMobile = 0.33; //25% of width
var menuImgHeightRatioDesktop = 0.25;


$(document).ready( function(){

	// initialize site depending on initial view port width
	layoutInit();

	$("#mapOverlay").click(function(event){
	  event.preventDefault();
	});
		
	$('button').on('click', function () {

		if ($('main').hasClass('move_left')) {

			$("main").addClass('move_right');
			$("main").removeClass('move_left');

		} else {

			$("main").addClass('move_left');
			$("main").removeClass('move_right');
		}

		
	});

	// $(".nav_item_container").on('click', function(){

	// 	if ($('button').css('display') != 'none'){
	// 		$("main").addClass('move_right');
	// 		$("main").removeClass('move_left');			
	// 	}else {
	// 		$("main").removeClass('move_left move_right');
	// 	}

	// });

	$('.nav_item').on('click', function() {

		$('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
   		 }, 1000, menuVisibilityControl());

   	});

	$(window).on('resize' , function(){
		layoutInit();
		$(".nav_item_container").show();
	});

});

// If viewport is mobile size show and hide the menu. If tablet and greater
// do nothing;
function menuVisibilityControl(callback) {
	
	if ($('button').css('display') != 'none'){

		$("main").addClass('move_right');
		$("main").removeClass('move_left');

	} else {
		$("main").removeClass('move_left move_right');
	}

}

// Sets layout classes and parameters for the particular view port
function layoutInit() {

		if ((window).outerWidth >= tablet){

			// $('.nav_item_container--first').hide();
			$("main").removeClass('move_left');

			// Change map ratio for better viewing on mobile
			$("div .embed-responsive").removeClass('embed-responsive-4by3');
			$("div .embed-responsive").addClass('embed-responsive-16by9');

			setImageHeight(menuImgHeightRatioDesktop, $(".menu_img"))

		}else {

			// $('.nav_item_container').show();
			
			// Change map ratio for better viewing on mobile
			$("div .embed-responsive").removeClass('embed-responsive-16by9');
			$("div .embed-responsive").addClass('embed-responsive-4by3');


			setImageHeight(menuImgHeightRatioMobile, $(".menu_img"))
		}
}

// This sets the height of the element as a percentage of the element's width
function setImageHeight (heightPercentage, element) {

		var containerWidth = element.css('width');
		var containerHeight = parseInt(containerWidth) * heightPercentage;
		element.css('height', containerHeight);
}