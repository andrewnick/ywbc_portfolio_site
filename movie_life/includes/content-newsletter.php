<div class="content__container background--beige">

	<?php if(isset($_POST['name'])) : ?>

		<div class="container news__success__container">
				<div class="row">
					<h1 class="content__title col-md-12">Success!</h1>
				</div>

				<div class="row">
					<h4 class="content__description col-md-12">Thank you <?php $firstName = explode(" ", $_POST['name']);echo $firstName[0]; ?> for signing up to our newsletter.</h4>
					<h4 class="content__description col-md-12" >We have recorded your email address as <?php echo $_POST['email']; ?>.</h4>
					<h4 class="content__description col-md-12">Please allow 24 hours for the latest newsletter to reach your inbox.</h4>
				</div>
		</div>

	<?php else : ?>

		<div class="container">
			<div class="row">
				<h1 class="content__title col-md-12">Newsletter</h1>
			</div>

			<div class="row">
				<h4 class="content__description col-md-8 col-md-offset-2">Sign up to our newsletter for the latest updates about the production and release of LIFE!</h4>
			</div>
		
		</div>


		<form class="form-horizontal news__form__container col-md-offset-3" role="form" action="" method="post">
			<div class="form-group form-group-lg ">
				<label for="nameInput" class="col-md-2 news__form__label news_form_label_name_email">Name</label> 
				<div class="col-md-5">
					<input type="text" class="form-control news__form__input" name="name" id="nameInput" placeholder='Enter name'>
				</div>
			</div>

			<div class="form-group form-group-lg">
				<label for="emailInput" class="col-md-2 news__form__label news_form_label_name_email">Email</label>
				<div class="col-md-5">
					<input type="email" class="form-control news__form__input" id="emailInput" name="email" placeholder="Enter email">
				</div>
			</div>

			<div class="form-group form-group-lg">
				<div class="col-md-3 col-md-offset-2">
					<button type="submit" class="btn news__form__label news__form__btn">Sign Up</button>
				</div>
			</div>
		</form>



	<?php endif ?>
</div>