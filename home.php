<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>
<?php $BASICINFO = getContacts(); ?>
<!-- <div class="inst-widget" height="190">
  <?php echo $BASICINFO["instagram_widget"]; ?>
</div> -->

<section class="hero-section">
    <!-- Swiper -->
    <div class="swiper main-slider">
      <div class="swiper-wrapper">

        <?php $count = 0; ?>
        <?php foreach(getSlider() as $slide) {?>
          <div class="swiper-slide">
            <div class="main-slider__img">
              
                <div class="hero">
                  <div class="hero__left">
                    <div class="hero__title-wrap animate__animated animate__fadeInLeft">
                      <h2 class="hero__title"><?php echo $slide['title'] ?></h2>
                    </div>
                    <hr class="animate__animated animate__fadeInLeft" color="#bb945b" size="6px" width="150px"  />
                    <div class="hero__block animate__animated animate__fadeInLeft">
                      <div class="hero__text">
                        <?php echo $slide["slide_desc"] ; ?>
                      </div>
                      <a href="tel:<?php echo $BASICINFO['phone_one']; ?>" class="hero__linck">Contact Us</a>
                    </div>
                  </div>
                  <!-- <div class="hero__right animate__animated animate__fadeInRight animate__animated animate__fadeInLeft">
                    <div class="feedback feedback-black">
                      <form class="feedback__form " id="smallForm">
                        <div class="form__loader"><span class="loader"></span></div>
                        <input class="form-control" id="smallFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
                        <input class="form-control " id="smallFormEmail" name="yourEmail" type="email" placeholder="Email"
                          aria-label="your email" />
                        <input class="form-control " id="smallFormPhone" name="yourPhone" type="text" placeholder="Phone"
                          aria-label="your phone" />
                        <textarea class="form-control" id="smallFormMessage" name="yourMessage" placeholder="Message"
                          aria-label="your message"></textarea>
                          <div class="smallForm__alert"></div>
                        <input type="submit" class="btn form-btn" value="Send" />
                      </form>
                    </div>
                  </div> -->
                </div>
              

              <img src="<?php echo $slide["slide_image"] ; ?>" width="1348" height="520" alt="slide" />
            </div>
          </div>
          <?php $count = $count + 1; ?>
        <?php } ?>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
</section>

<main class="main">
   <!-- <?php  echo do_shortcode('[smartslider3 slider="2"]');  ?> -->

<div class="video-section">
  <div class="video-section__video">
    <?php echo $BASICINFO['video-section']; ?>
    <!-- <iframe src="https://player.vimeo.com/video/324901939?h=602374f16d" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        <p><a href="https://vimeo.com/324901939">Jocelyn &amp; Fernando Rivero. Studio City, CA</a> from <a href="https://vimeo.com/user3235268">Roberto Garcia</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
  </div>
</div>

<section class="services">
  <h2 class="consultation__heding services__heading">
    Products & Services
    <span></span>
  </h2>

  <div class="services__content">
    <?php foreach(getServicesSection() as $service) {?>
      <div class="services__item">
        <div class="services__img">
          <a href="<?php echo $service["services_linck"]; ?>"> 
            <img src="<?php echo $service["img"]; ?>"  alt="service image">
          </a>
        </div>
        <h3 class="services__title">
          <a href="<?php echo $service["services_linck"]; ?>">
            <?php echo $service["title"]; ?>
          </a>
        </h3>
        <a href="<?php echo $service["services_linck"]; ?>" class="services__details">
          MORE DETAILS
        </a>
      </div>
      <?php }?>
  </div>

</section>


      <section class="main-gallery">
        <h2 class="gallery__header">Gallery</h2>
        <div class="gallery__actions">
          <a href="https://flatrateremodeling.semempires.com/gallery/" class="gallery__linck">View Gallery</a>
        </div>

        <div class="gallery__sliders">
          <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?foreach(getSliderLeft() as $lslide) { ?>
                <div class="gallery-slider__slide swiper-slide">
                  <h2 class="gallery-slider__text">
                    <a href="<?php echo $lslide["gallery_post_linck"]; ?>">
                      <?php echo $lslide["title"]; ?>
                    </a>
                  </h2>
                  <img src="<?php echo $lslide["slide_image"]; ?>" class="gallery-slider__img" alt="slide image">
                </div>
              <?} ?>

            </div>
          </div>

          <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?foreach(getSliderRight() as $rslide) { ?>
                <div class="gallery-slider__slide swiper-slide">
                  <h2 class="gallery-slider__text">
                    <a href="<?php echo $rslide["gallery_post_linck"]; ?>">
                      <?php echo $rslide["title"]; ?>
                    </a>
                  </h2>
                  <img src="<?php echo $rslide["slide_image"]; ?>" class="gallery-slider__img" alt="slide image">
                </div>
              <?} ?>

            </div>
          </div>
        </div>
      </section>

      <section class="get-started">
        <div class="get-started__body">
          <p class="get-started__text">Lets Get Started on Your Next Project!</p>
          <a id="btn_open" class="get-started__button popup-link" href="#popup_1">
            Start here
          </a>
        </div>
      </section>

  <section class="reviews" id="reviews">
    <div class="reviews__container">
      <h2 class="reviews__heading reviews-title">Customers Testimonials</h2>
      <div class="reviews__content">

        <div class="reviews__slider swiper">
          <div class="reviews__wrapper swiper-wrapper">

          <?php foreach(getReviews() as $review) {?>
              <div class="reviews__slide swiper-slide review">

                  <div class="review__head">
                  <div class="review__photo">
                      <img src="<?php echo $review["img"];?>" alt="photo" width="40" height="40">
                  </div>
                  <div>
                      <h3 class="review__fullname"><?php echo $review["title"];?></h3>
                      <div class="review__date"><?php echo $review["сomment_date"];?></div>
                  </div>
                  </div>


                  <div class="rating review__rating">
                  <div class="rating__body">
                      <div class="rating__active"></div>
                      <div class="rating__items">
                      <input type="radio" class="rating__item" value="1" name="rating">
                      <input type="radio" class="rating__item" value="2" name="rating">
                      <input type="radio" class="rating__item" value="3" name="rating">
                      <input type="radio" class="rating__item" value="4" name="rating">
                      <input type="radio" class="rating__item" value="5" name="rating">
                      </div>
                  </div>
                  <div class="rating__value"><?php echo $review["rating"];?></div>
                  </div>

                  <p class="review__text">
                      <?php echo $review["feedback_text"];?>
                  </p>
                  <button class="review__link">Read More</button>
                  
              </div>
            <?php }?>

          </div>
        </div>


      </div>
    </div>
  </section>

<div class="logoshowcase">
  <?php echo do_shortcode('[logoshowcase arrows="false" autoplay="false" limit="4" extra_class="logo-slider"]'); ?>
</div>


      <section class="consultation" style="margin-top:30px;">
          <h2 class="consultation__heding">
            Schedule a Free Consultation
            <span></span>
          </h2>

          <div class="feedback">
            <form class="feedback__form" id="bigForm"  style="max-width: 700px; margin: 50px auto;">
              <div class="form__loader"><span class="loader"></span></div>
              <input class="form-control" id="bigFormName" name="yourName" type="text" placeholder="Name" aria-label="your name">
              <input class="form-control" id="bigFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email">
              <input class="form-control" id="bigFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone">
              <textarea class="form-control"id="bigFormMessage" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
              <div class="bigForm__alert"></div>
              <input type="submit" class="btn form-btn" value="Send" style="max-width: 140px;">
            </form>
          </div>
      </section>
</main>

<?php get_footer();?>