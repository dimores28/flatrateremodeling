<?php
/*
Template Name: About
*/
?>

<?php get_header();?>

<section class="about" id="about">
          <div class="about__header">
            <img
              class="about__bg"
              src="<?php bloginfo('template_url'); ?>/assets/img/bg-subheader-about.jpg" width="1348" height="520" alt="bg-subheader-about"
            />
            <div class="about__heading">
              <h2>ABOUT US</h2>
            </div>
          </div>
          <div class="about__body">
            <div class="about__img">
              <img src=" <?php bloginfo('template_url'); ?>/assets/img/Certificate-2021.webp"  alt="Certificate" />
            </div>
            <div class="about__content">
              <h3 class="about__title">About us</h3>
              <hr class="devider" color="#bb945b" size="6px" />
              <p class="about__text">
                Flat Rate Remodeling is a licensed, bonded and insured general
                contracting company who guarantees to exceed your construction
                and remodeling expectations. We work to create your dream home
                step by step. We are a family owned business, meaning we
                understand our clients and know the importance of maintaining a
                home. we are the only remodeling company in Southern California
                that offers "flat rate" pricing for all of our products and
                services. You will never have to worry about fluctuating prices
                during your project. We work with premium architects and
                designers to provide their expertise and skills to any room in
                your home.
                 We are also an environmentally friendly company with our energy
                efficient products. We offer a variety of insulated windows and
                doors, natural tankless water heaterS, solar panels, wireless
                generators and more. we always provide each and every customer
                first-rate work at a flat rate price!
              </p>
            </div>
            <div class="why-us__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/why_us.jpg" alt="why_us" />
            </div>
            <div class="why-us__content">
              <!-- <h3 class="why-us__title">Why choose us?</h3> -->
              <!-- <hr class="devider" color="#bb945b" size="3px" /> -->
              <p class="why-us__text">
               
              </p>
            </div>
          </div>
        </section>

<?php get_footer();?>