$(document).ready ( function(){

	//initializeMaps();

	var releaseDate = new Date("25 December 2014").getTime();

	var days,
		hours,
		minutes,
		seconds;

	var countdown = $('#releaseDate');

	setInterval(function () {

		var currentDate  = new Date().getTime();
		var secondsLeft = (releaseDate - currentDate) / 1000 ;

		days = parseInt(secondsLeft / 86400);
		secondsLeft = secondsLeft % 86400;

		hours = parseInt(secondsLeft / 3600);
		secondsLeft = secondsLeft % 3600;

		minutes = parseInt(secondsLeft / 60);
		seconds = parseInt(secondsLeft % 60);

		// console.log(days, hours,  minutes, seconds);

		countdown.html(days + " Days " + hours + ":" + minutes + ":" + seconds);

	}, 1000);

});