<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

<main class="main">
   <?php  echo do_shortcode('[smartslider3 slider="2"]');  ?>

   <!-- <div class="video-section">
      <div class="video-section__video">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/CdGm0WabnDA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
   </div> -->

   <?php  the_content(); ?>
</main>

<?php get_footer();?>