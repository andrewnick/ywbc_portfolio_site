<!-- Countdown timer - The Timer calculates the time until the release date of the movie -->

<?php 
		date_default_timezone_set('Pacific/Auckland');
		// Time until release
		$rDay = 1;
		$rMonth = 8;
		$rYear = 2014;

		$rHour = 16;
		$rMinute = 0;
		$rSecond = 0;

		$releaseDate = new DateTime();
		$releaseDate->setTimeStamp(mktime($rHour,$rMinute,$rSecond,$rMonth,$rDay,$rYear));

		$currentTime = new DateTime();
		$currentTime->setTimeStamp(time());

		$timeDifference = $releaseDate->diff($currentTime);
		$timeUntilRelease = $timeDifference->format('%d/%m %h:%i:%s') . "<br/>";
?>

<header>
	<div class="header__background background--blue">
		<div class="container header__content">

			<div class="col-md-3">
				<a href="index.php"><img src="assets/media/Title.png" alt="LIFE Title" class="header__title"></a>
			</div>

			<div class="col-md-4">

				<?php require_once ('includes/nav.php'); ?>
			
			</div>

			<div class="countdown countdown__container col-md-5">
				<h2 class='countdown countdown__title'> Coming Soon </h2>
				<h3 class="countdown countdown__counter" id="releaseDate"></h3>	 <!--		<?php echo $timeUntilRelease; ?>  -->
			</div>
			
		</div>
	</div>
</header>