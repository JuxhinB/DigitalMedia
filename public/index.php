<!doctype html>
<html lang="en">
  <head>
		<?php
		@include "./components/_head.php";
		?>
    <title>Home | EcroneX</title>
  </head>
  <body>
    <?php
    @include"./components/_menu.php";
    ?>
    <!-- Slider Section -->
    <section id="home-main" class="new-slider container-fluid">
      <div class="new-slider-row m-auto row max-row">
        <div class="new-slider-col">
            <a href="" class="typewrite" 
            data-period="2000" 
            data-type='[ "Dedication", "Passion", "Loyalty" ]'>
              <span class="wrap"></span>
            </a>
        </div>
      </div>
      <div class="particles" id="particles-js"></div> 
    </section>
    <!-- Team Section -->
    <section class="team-container container-fluid max-container">
      <div class="team-row m-auto row max-row">
        <div class="display-md-none h-100 col-md-5">
          <img class="section-img h-100" alt="Team Photo" src="./src/img/target.png" />
        </div>
        <div class="col-12 col-md-7 pl-3 pl-md-5">
          <p class="section-title mb-2 mb-md-4">
            We’r a dynamic team of Innovative , Creatives & Marketing Experts.
          </p>
          <!-- <p class="section-subtitle pl-0 pl-md-3 mb-2 mb-md-4">
              Best Digital Agency
          </p> -->
          <p class="section-text position-relative mb-3 mb-md-5 pl-md-5">
              Our experts are constantly working to find innovative ways that businesses can benefit from this huge online economy. 
              <br> Opportunities are multiple, as various web platforms provide brand promotion, successful direct marketing, easy connections between needy costumers and suppliers and analytics so much detailed, that industry leaders will not even dream off having in the last century. 
          </p>
          <div class="team-bottom w-100">
            <div class="learn-more-btn">
              <div class="learn-btn">
                <a href="about.php">Learn More</a> <i class="fa fa-long-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Partners Section -->
    <div class="partners-container container-fluid">
      <div class="partners-row m-auto row max-row justify-content-center">
        <div class="info-col order-1 order-md-1 col-12 col-md-5">
          <div class="info-wrap">
            <p class="company-name">EcroneX</p>
            <p class="company-slogan">Everyone Is Invited</p>
          </div>
        </div>
        <div class="partners-col order-3 order-md-2 col-12 col-md-7">
          <div class="partners-wrap">
            <div class="partner">
              <div class="partner-img-wrap">
                <img class="partner-img" src="./src/img/partners/google/Google-Partner-Logo.jpg" alt="">
              </div>
              <div class="sub-service">
                <img class="sub-service-img" src="./src/img/partners/google/Disaplay.jpg" alt="">
                <img class="sub-service-img" src="./src/img/partners/google/Mobile.jpg" alt="">
                <img class="sub-service-img" src="./src/img/partners/google/Search.jpg" alt="">
                <img class="sub-service-img" src="./src/img/partners/google/Shoping.jpg" alt="">
              </div>
            </div>
            <div class="partner">
              <div class="partner-img-wrap">
                <img class="partner-img" src="./src/img/partners/Bing-Partner-Logo.jpg" alt="">
              </div>
              <div class="sub-service">
                <img class="sub-service-img" src="./src/img/partners/Bing-Ads.png" alt="">
              </div>
            </div>
            <div class="partner">
              <div class="partner-img-wrap">
                <img class="partner-img" src="./src/img/partners/Facebook-Partner-Logo.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="order-2 order-md-3 col-12">
          <p class="partners-text">
            We use the latest analytic, marketing and developing techniques to provide the right support to your company, 
            to help you expand and immediately reach new customers. 
            <br> Make a solid investment in the growth of your company and look to the 
            future.
          </p>
        </div>
      </div>
    </div>
    <!-- Services Detail Section -->
    <section class="s-detail-container container-fluid max-container">
      <div class="s-detail-row m-auto row max-row">
        <div class="s-detail col-12">
          <p class="section-title text-center mb-2 mb-md-4">
            Expertise
          </p>
          <p class="section-subtitle text-center mb-2 mb-md-4">
            Services we proudly offer with professionalism
          </p>
          <div class="row justify-content-center">

            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-check"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">Branding</h4>
                <p class="section-card-text">
                    Our strategies focus on expressing your business story, personality and philosophy with beautiful images and designs, so it creates an emotional bond with your clients.
                </p>
              </div>
            </div>

            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-terminal"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">Website</h4>
                <p class="section-card-text">
                  We build your website so when you visit it, you find an unique experience, along with anything you are searching for, and easy ways to take action.
                </p>
              </div>
            </div>

            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-mobile"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">Mobile App</h4>
                <p class="section-card-text">
                  We develop apps that are both attractive and highly functional.
                  Matching relevant content with great design and clear navigation builds a strong connection with your audience.
                </p>
              </div>
            </div>

            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-bar-chart"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">SEO</h4>
                <p class="section-card-text">
                    We will optimize and guide your site, so it’ll make a name for itself and be visible and attract as much prospects as possible.
                </p>
              </div>
            </div>
            
            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-thumbs-o-up"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">Social Media Marketing</h4>
                <p class="section-card-text">
                  People today spend more time on social media then on tv, radio and reading newspaper combined! Lets use this to the advantage of your business.
                </p>
              </div>
            </div>

            <div class="s-card-wrap p-3 col-12 col-md-4">
              <div class="s-card">
                <div class="s-icon mb-2">
                  <i class="fa fa-globe"></i>
                </div>
                <h4 class="section-card-title mb-0 mb-md-2">Digital Marketing</h4>
                <p class="section-card-text">
                  We know exactly where these spots are, and how to strategically position your website there, so it’ll start attracting buyers at a high pace.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Steps Section -->
    <section id="steps-desc" class="steps-container mt-md-4 mt-2 mb-md-4 mb-2 container-fluid max-container">
      <div class="steps-row m-auto row max-row">
        <p class="text-center w-100 section-title mb-2">
          We Complete Every Step Carefully
        </p>
        <div class="section-underline mb-1"></div>
        <div class="d-flex position-relative w-100">
          <div class="back-line"></div>
          <div id="step1" data-toggle="collapse" data-target="#step1-bod" aria-expanded="true" aria-controls="step1-body" class="steps-card-wrap col-3">
            <div class="steps-card">
              <p class="steps-card-nr red">01</p>
            </div>
            <p class="steps-card-title">Collect Idea</p>
          </div>
    
          <div id="step2" data-toggle="collapse" data-target="#step2-bod" aria-expanded="true" aria-controls="step2-body" class="steps-card-wrap col-3">
            <div class="steps-card">
              <p class="steps-card-nr green">02</p>
            </div>
            <p class="steps-card-title">Create Prototype</p>
          </div>
    
          <div id="step3" data-toggle="collapse" data-target="#step3-bod" aria-expanded="true" aria-controls="step3-body" class="steps-card-wrap col-3">
            <div class="steps-card">
              <p class="steps-card-nr yellow">03</p>
            </div>
            <p class="steps-card-title">Design <br> & <br> Development</p>
          </div>
    
          <div id="step4" data-toggle="collapse" data-target="#step4-bod" aria-expanded="true" aria-controls="step4-body" class="steps-card-wrap col-3">
            <div class="steps-card">
              <p class="steps-card-nr blue">04</p>
            </div>
            <p class="steps-card-title">Launch Product</p>
          </div>
        </div>
      </div>

      <div class="m-auto row max-row">
        <div class="col">
          <div id="step1-body" class="collapse" aria-labelledby="step1" data-parent="#steps-desc">
            <div class="card-body">
                <div class="slider-line w-25">
                  <div class="small-arrow-up right-1"></div>
                </div>
              <p class="card-body-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
            </div>
          </div>
          <div id="step2-body" class="collapse" aria-labelledby="step2" data-parent="#steps-desc">
            <div class="card-body">
                <div class="slider-line w-50">
                  <div class="small-arrow-up right-2"></div>
                </div>
                <p class="card-body-text">3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
          </div>
          <div id="step3-body" class="collapse" aria-labelledby="step3" data-parent="#steps-desc">
            <div class="card-body">
                <div class="slider-line w-75">
                  <div class="small-arrow-up right-3"></div>
                </div>
                <p class="card-body-text">Anim pariatur cliche reprehenderit. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
          </div>
          <div id="step4-body" class="collapse" aria-labelledby="step4" data-parent="#steps-desc">
            <div class="card-body">
                <div class="slider-line w-100">
                  <div class="small-arrow-up right-4"></div>
                </div>
                <p class="card-body-text">Anim pariatur skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Reviews Section -->
    <section class="reviews-container mt-md-4 mt-2 mb-md-4 mb-2 container-fluid max-container">
      <div class="reviews-row m-auto row max-row">
          <p class="text-center w-100 section-title mb-1">Our Clients</p>
          <div class="section-underline mt-1 mb-2"></div>
        <div class="">
          <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="inner-wrap">
                    <p class="quote">“ I had a great site and lots of traffic but no one ever converted to a client. After a couple of constructive conversations with the specialists in market, and the purchase of one of their amazing packages, they filtered out the bad traffic from my website, replaced it with quality prospects, and conversions skyrocketed. ”</p>
                    <div class="author-wrap w-100">
                      <p class="author">Andrea Romano</p>
                      <p class="author-position">President JL Construction</p>
                    </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="inner-wrap">
                  <p class="quote">“ At 53 years old and running my family business for 17 years, I knew nothing about online advertisement and was skeptical if it can do any good to my enterprise. Luckily, EcroneX staff did a good job explaining me why any business can benefit from it, and now just 6 month on their program, my ROI explains why the big buzz about online marketing. Thank you EcroneX Media. ”</p>
                  <div class="author-wrap w-100">
                    <p class="author">Aaron Blum</p>
                    <p class="author-position">Owner Elite Brewery</p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="inner-wrap">
                  <p class="quote">“ Before starting my collaboration with EcroneX, the only thing for which I used the internet was to check the weather, and I was surprised to hear my business friends say they were getting clients online. The EcroneX Package not only clarified how you can use the internet for business, but today I'm enjoying a 300% ROI. ”</p>
                  <div class="author-wrap w-100">
                    <p class="author">Franco Venturi</p>
                    <p class="author-position">Administrator OWL Pellet LLC</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Clients Section -->
    <section class="clients-container container-fluid max-container">
			<div class="m-auto row max-row justify-content-center">
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/abcMallorca.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
           <img src="./src/img/clients-photos/Altovita.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/Archiproducts.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/ArtNouveauPalace.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/AtlasDivine.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/BowlesWyer.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/LaCasa.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/Monsoon.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/Nordstorm.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/Techtera.jpg" alt="">
        </div>
        <div class="col-4 col-md-3">
          <img src="./src/img/clients-photos/Berkshire.jpg" alt="">
        </div>
			</div>
    </section>
    <?php
    @include "./components/_footer.php";
    ?>
	</body>
</html>