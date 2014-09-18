<?php 
	$currentDate = new DateTime();
	$currentDate->setTimeStamp(time());
	echo $currentDate->format('U = Y-m-d H:i:s') . "\n";

	$movie_sessions = array(
			'Monday' =>	array('6:30pm'),
			'Tuesday' =>	array('4:00pm', '5:40am'),
			'Wednesday' =>	array('6:45pm', '7:40am'),
			'Thursday' =>	array('8:30pm', '9:40am'),
			'Friday' =>	array('10:30pm'),
			'Saturday' =>	array('12:30pm', '1:40am'),
			'Sunday' =>	array('2:30pm', '3:40am'),
		);

	$nextFiveDays = array();
	$nextFiveDays = array();

	$currentDayName = $currentDate->format('l');

	// Set both pointers to the start of the array;
	reset($nextFiveDays);
	reset($movie_sessions);

	// Movie moive times point to current day
	while ( key($movie_sessions)!= $currentDayName){
		next($movie_sessions);
	}

	for ($i=0; $i < 5; $i++) { 

		if(($movieItem['key']) == "Sunday") {
			reset($movie_sessions);
		}

		$movieItem = each($movie_sessions);
		$nextFiveDays[$movieItem['key']] = $movieItem['value'];
	}
?>

<main>
	<section class="home_main content__container background--beige">
		<div class="container">
			
			<!-- Page Title -->
			<div class="row">
				<h1 class="content__title col-md-12" id='map'>Tickets</h1>
			</div>

			<div class="row">
				<h4 class="content__description col-md-8 col-md-offset-2">Find a screening near you!</h4>
			</div>
			

			<section class="row tickets__locate__container">
				<!-- Search Panel -->
				<div class="col-md-4 tickets__search__container">
					<section>
						<!-- Search tool bar -->
<!-- 							<div class="row">
								<div class="tickets__search col-md-12">
								    <div class="input-group input-group-lg">
								      <input type="text" name="search" id="searchInput" placeholder="Search" class="form-control tickets__form__input">
								      <span class="input-group-btn">
								        <button class="btn btn-default tickets__map__form__btn" id="searchButton" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								      </span>
								    </div>		  
								</div>
							</div> -->
					
						<!-- Search result -->
						<div class="row">
							<article class="col-md-12 tickets__result__border" >
								<div class="tickets__result__background">
									<h4 class="tickets__result__title"> Hoyts Cinema </h4>
									<p class="body_text tickets__result__link"><a class="link_text" href="http://www.hoyts.co.nz/cinemas/locations/hoyts_riccarton.aspx" >Buy Tickets</a></p>
								</div>

								<article class="session_times col-md-12">
									<h5 class="tickets__result__session__title">Session Times</h5>

									<?php	foreach ($nextFiveDays as $session_day => $session_times) : ?>												
													<article class="row">

														<div class="col-md-4">
															<p class="body_text tickets__result__session__day"><?php echo $session_day; ?></p>
														</div>

									 					<?php foreach ($session_times as $session): ?>
															<div class="col-md-3">
																<p class="body_text tickets__result__session__day tickets__result__session__text__time"><?php echo $session; ?></p>
															</div>
														<?php endforeach ?>
										
													</article>
									<?php 	endforeach ?>
								</article>
							</article>
						</div>



						<div class="row tickets__result__premiere">
							<article class="col-md-12" >
								<div class="tickets__result__background">
									<p class="body_text tickets__result__premiere__notice"> Join us at Hoyts Riccarton for the premiere of LIFE!</p>
									<!-- <p class="body_text tickets__result__premiere__notice tickets__result__link"><a class="link_text" href="http://www.hoyts.co.nz/cinemas/locations/hoyts_riccarton.aspx" >Buy Tickets</a></p> -->
									<p class="body_text">Please return after the premiere to find a screening near you</p> 
								</div>
							</article>
						</div>

					</section>
				</div>
				
				<!-- Embedded Google Map -->
				<!-- <div class="col-md-8 tickets__map__container"> -->
					<!-- Google Map Frame -->
<!-- 					<div class="embed-responsive embed-responsive-4by3">
						<?php $searchResultDefault="christchurch+hoyts+riccarton" ?>

						<?php if(isset($_POST['search']) && ($_POST['search'] != "")) :
							$parsedSearchQuery = explode(" ", $_POST['search']);
							$searchResult = implode("+", $parsedSearchQuery);
						?>

							<iframe   class="embed-responsive-item" 
						  		src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBS0N0dpiNp-SYnIaH-8ojcyAws1SxYsTg&q=<?php echo $searchResult;?>&zoom=13">
							</iframe>	

						<?php else :?>

							<iframe   class="embed-responsive-item"
						  		src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBS0N0dpiNp-SYnIaH-8ojcyAws1SxYsTg&q=<?php echo $searchResultDefault;?>&zoom=13">
							</iframe>	

						<?php endif ?>
					</div> -->

					<div class="col-md-8 tickets__map__container">
						<div class="embed-responsive embed-responsive-4by3" > <!--id="map_canvas" -->
							 <iframe   class="embed-responsive-item"
						  		src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBS0N0dpiNp-SYnIaH-8ojcyAws1SxYsTg&q=Hoyts+riccarton?>&zoom=13">
  							</iframe>
						</div>
					</div>
				</div> 
			</section>
		</div>	
	</section>
</main>