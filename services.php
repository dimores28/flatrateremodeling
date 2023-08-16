<?php
/*
Template Name: Services
*/
?>

<?php get_header();?>
   
   <main class="main-services">
      <?php  the_content(); ?>
   </main>

   <section class="reviews" id="reviews">
      <h2 class="service-heding" style="margin-top: 40px; font-size: 32px; margin-bottom: 24px;">
          Our Customers <span>Love Our Work!</span>
      </h2>
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
