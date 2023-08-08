<?php
/*
Template Name: Remodeling
*/
?>

<?php get_header();?>
   <?php  the_content(); ?>
   
   <main class="main-services">
   <?php echo do_shortcode('[logoshowcase]'); ?>

    <h2 class="service-heding">Our Customers<span>Love Our Work!</span></h2>
    <h3 class="reviews-title">Customers Testimonials</h3>

    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
   </main>
   

   <section class="get-started">
   <div class="get-started__body">
      <p class="get-started__text">Lets Get Started on Your Next Project!</p>
      <a id="btn_open" 
      class="get-started__button popup-link"
      href="#popup_1"
      >
         Start here</a>
   </div>
   </section>
<?php get_footer();?>