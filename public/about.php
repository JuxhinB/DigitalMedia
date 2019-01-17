<!doctype html>
<html lang="en">
  <head>
		<?php
		@include "./components/_head.php";
		?>
    <title>About | EcroneX</title>
  </head>
  <body>
    <?php
      @include "./components/_menu.php";
      @include "./components/_page-header.php";
		?>
    <!-- About Section -->
		<div class="about-sp container-fluid max-container">
      <div class="about-sp-row m-auto row max-row">
        <div class="col">
          <div class="accordion row" id="about-accordion">

            <div class="col-12 col-md-3 d-flex flex-md-column justify-content-center align-items-center align-items-md-end">
              <a class="about-acc-btn" id="about1-tab" data-toggle="collapse" data-target="#about1-body" aria-expanded="true" aria-controls="about1-body">
                Our Company
              </a>
              <a class="about-acc-btn collapsed" id="about2-tab" data-toggle="collapse" data-target="#about2-body" aria-expanded="false" aria-controls="about2-body">
                Our Vision
              </a>
              <a class="about-acc-btn collapsed" id="about3-tab" data-toggle="collapse" data-target="#about3-body" aria-expanded="false" aria-controls="about3-body">
                Our Aproach
              </a>
            </div>

            <div class="col-12 col-md-9 d-flex flex-column justify-content-center align-items-center">
              <div id="about1-body" class="collapse show" aria-labelledby="about1-tab" data-parent="#about-accordion">
                <div class="card-body">
                  <p class="about-acc-text">
                    EcroneX Media is a multinational digital marketing agency that helps businesses transit and prosper in the internet era. The galaxy is the limit for online marketing, and very few companies are using this opportunity properly, because of little understanding. Our passion is to put the expertise we possess in use of the businesses, taking care obsessively for the strategy, management and optimization of their online campaigns.
                  </p>
                </div>
              </div>

              <div id="about2-body" class="collapse" aria-labelledby="about2-tab" data-parent="#about-accordion">
                <div class="card-body">
                  <p class="about-acc-text">
                    The view we have when we stare at our objective telescope, is the Internet as the next phase of marketing evolution, a way without return which has already taken It’s course globally. Our vision is to build a close partnership network, whereby with long-term cooperation, we help reach their business objectives by using the web.
                  </p>
                </div>
              </div>

              <div id="about3-body" class="collapse" aria-labelledby="about3-tab" data-parent="#about-accordion">
                <div class="card-body">
                  <p class="about-acc-text">
                    Technology has built a culture entirely of its own, in the past decades. Our work environment, our team, and our mantra make sure to be in the flow with this culture, so we’re always ahead in the tech race. By utilizing innovative marketing methods and by updating daily in new trends, we keep walking tirelessly towards the goals of our partners.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="clients-sp m-auto row max-row justify-content-center">
        <p class="clients-main-title text-center">Recent Clients</p>
        <p class="clients-desc text-center">
          You bring the idea and we take care of the rest.
        </p>
        <div class="clients-slider">
            <img src="./src/img/clients-photos/abcMallorca.jpg" alt="">
            <img src="./src/img/clients-photos/Altovita.jpg" alt="">
            <img src="./src/img/clients-photos/Archiproducts.jpg" alt="">
            <img src="./src/img/clients-photos/ArtNouveauPalace.jpg" alt="">
            <img src="./src/img/clients-photos/AtlasDivine.jpg" alt="">
            <img src="./src/img/clients-photos/BowlesWyer.jpg" alt="">
            <img src="./src/img/clients-photos/LaCasa.jpg" alt="">
            <img src="./src/img/clients-photos/Monsoon.jpg" alt="">
            <img src="./src/img/clients-photos/Nordstorm.jpg" alt="">
            <img src="./src/img/clients-photos/Techtera.jpg" alt="">
            <img src="./src/img/clients-photos/Berkshire.jpg" alt="">
          </div>
      </div>
    </div>
    <?php
      @include "./components/_footer.php";
    ?>
	</body>
</html>