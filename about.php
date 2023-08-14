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
              <hr class="devider__heading" color="#bb945b" size="8px" />
            </div>
          </div>
          <div class="about__body">
            <div class="about__img">
              <img src=" <?php bloginfo('template_url'); ?>/assets/img/Certificate-2021.webp"  alt="Certificate" />
            </div>
            <div class="about__content">
              <h3 class="about__title">About us</h3>
              <hr class="devider" color="#bb945b" size="6px" />
              <div class="about__text">
                <p>
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
              </p>
              <p>
                We are also an environmentally friendly company with our energy
                efficient products. We offer a variety of insulated windows and
                doors, natural tankless water heaterS, solar panels, wireless
                generators and more. we always provide each and every customer
                first-rate work at a flat rate price!
              </p>
              </div>
              
            </div>
            <div class="why-us__img"> 
             <?php echo do_shortcode('[envira-gallery id="631"]'); ?>
            </div>
            
          </div>
        </section>

<section class="get-started" style="margin-top: 20px;">
   <div class="get-started__body">
      <p class="get-started__text">Lets Get Started on Your Next Project!</p>
      <a id="btn_open" 
         class="get-started__button popup-link" 
         style="text-decoration: none;"
         href="#popup_1"
      >
         Start here
      </a>
   </div>
</section>

<?php get_footer();?>