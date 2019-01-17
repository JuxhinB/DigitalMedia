<!doctype html>
<html lang="en">
  <head>
		<?php
		@include "./components/_head.php";
		?>
    <title>Contact | EcroneX</title>
  </head>
  <body>
    <?php
      @include "./components/_menu.php";
      @include "./components/_page-header.php";
		?>
		<!-- Contact Section -->
		<section class="contact-sp container-fluid max-container">
			<div class="contact-row contact-padding m-auto row max-row">
				<div class="order-2 order-sm-1 col-12 col-sm-6 d-flex justify-content-end align-items-center">
					<form class="contact-form" method="post" action="#">
              <input class="general-field" id="name" name="name" type="name" placeholder="Name*" required>
              <input class="general-field" id="email" name="email" type="email" placeholder="Email Address*" required>
              <input class="general-field" id="phone-nr" name="phone-nr" type="number" placeholder="Phone Number*" required>
						<textarea class="text-field" id="contact-field" name="contact-field" maxlength="1200" placeholder="Your Message*" required></textarea>
						<input class="submit-btn" id="contact-submit" type="submit" value="Send Message">
					</form>
				</div>
				<div class="mt-2 mt-sm-0 order-1 order-md-2 col-12 col-sm-6 d-flex flex-column justify-content-center">
					<p class="contact-text text-center text-sm-left">Don’t Hesitate to contact with us for any kind of information</p>
					<p class="contact-phone text-center text-sm-left"">880 876 65 455</p>
				</div>
			</div>
			
		</section>
		<section class="container-fluid max-container">
			<div class="map-row m-auto row pt-3">
					<div class="col p-0">
						<div class="mapouter">
							<div class="gmap_canvas">
								<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
								</iframe>
							</div>
						</div>
					</div>
				</div>
		</section>
    <?php
      @include "./components/_footer.php";
    ?>
	</body>
</html>