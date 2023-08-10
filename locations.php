<?php
/*
Template Name: Locations
*/
?>

<?php get_header();?>

<div class="locations">
   <?php echo do_shortcode('[ultimate_maps id="1"]')?>
</div>

<section class="get-started" style="position: relative; z-index: 2;">
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
