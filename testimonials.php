<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header();?>

<section class="testimonials">
    <div class="testimonials__container">
        <h1 class="testimonials__header">
            TESTIMONIALS
        </h1>
    </div>
</section>

<div class="side-column-section">
    <div class="side-column-section__content">

        <?php  the_content(); ?>

        <div class="testimonials-reviews">
            <?php foreach(getFoorReviews() as $review) {?>
                <div class="testimonials-reviews__item">
                    <div class="testimonials-reviews__head">
                        <div class="testimonials-reviews__photo">
                            <img src="<?php echo $review["img"];?>" alt="photo" width="70" height="70" />
                        </div>
                        <div>
                            <h3 class="testimonials-reviews__fullname"><?php echo $review["title"];?></h3>
                        </div>
                    </div>

                    <p class="testimonials-reviews__text">
                        <?php echo $review["feedback_text"];?>
                    </p>
                </div>
            <?php }?>
        </div>

    </div>
    
    <aside class="side-column-section__aside">
    <div class="aside-form" style="margin-top: 12px;">
        <h2 class="aside-form__title">
        Schedule A Free Consultation
        </h2>
        <div class="feedback">
       <form class="feedback__form" id="smallForm">
            <div class="form__loader"><span class="loader"></span></div>
            <input class="form-control" id="smallFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" id="smallFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <input class="form-control" id="smallFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <textarea class="form-control" id="smallFormMessage" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <div class="smallForm__alert"></div>
            <button type="submit" class="aside-form__btn">
            <span>Send</span>
            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
            </button>
        </form>
        </div>
    </div>
    </aside>

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