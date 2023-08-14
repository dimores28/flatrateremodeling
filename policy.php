<?php
/*
Template Name: Privacy Policy
*/
?>

<?php get_header();?>
   
   <main class="main-services">
      <?php  the_content(); ?>

    <h2 class="service-heding" style="margin-top: 40px;">Our Customers <span>Love Our Work!</span></h2>
    <h3 class="reviews-title" style="font-size: 17px;">Customers Testimonials</h3>

    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>

    <?php echo do_shortcode('[logoshowcase arrows="false" autoplay="false" limit="4" extra_class="logo-slider"]'); ?>
   </main>
   

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