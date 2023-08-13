<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

<section class="hero-section">
    <!-- Swiper -->
    <div class="swiper main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="main-slider__img">
            <div class="hero">
              <div class="hero__left animate__animated animate__fadeInLeft">
                <div class="hero__title-wrap">
                  <h1 class="hero__title">Residential & Commercial remodeling in Los Angeles</h1>
                </div>
                <div class="hero__block">
                  <div class="hero__text">
                    We have the experience,passion and resources to make your project come to life while running
                    smoothly
                  </div>
                  <a href="#" class="hero__linck">Contact Us</a>
                </div>
              </div>
              <div class="hero__right animate__animated animate__fadeInRight">
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
              </div>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/iStock-1148629418.jpg" width="1348" height="520" alt="slide" />
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">

            <img src="<?php bloginfo('template_url'); ?>/assets/img/iStock-1363560181.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/iStock-1398692686.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/iStock-1453183714.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
       <!--  <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide5.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide6.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide7.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide8.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide9.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide10.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/slide11.jpg" width="1348" height="520" alt="slide" />
          </div>
        </div> -->
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

   <!-- <div class="video-section">
      <div class="video-section__video">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/CdGm0WabnDA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
   </div> -->
   

   <?php  the_content(); ?>
</main>

<?php get_footer();?>