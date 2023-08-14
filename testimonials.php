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
        <div class="video-reviews">
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/324901939?h=602374f16d" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/286909320?h=3781620341" width="640" height="360"
                frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/218251240?h=155908097a" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/211259329?h=3672dd59f3" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/185099317?h=4c38bca906" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/182506335?h=e3372ff8eb" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/226865052?h=94bc70079b" width="640" height="360"
                frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-reviews__item">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/185723653?h=3db3cc5f37" width="640" height="360"
                frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <?php echo do_shortcode('[trustindex data-widget-id=2f56fbf184455915299619bfd6d]'); ?>
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

<style>
 .ti-widget[data-layout-id='16'][data-set-id='drop-shadow'] .ti-col-2 .ti-review-item  {
  flex: 1 1 calc(50% - 14px) !important;
  max-width: 50% !important;
  position: relative;
}

.ti-widget[data-layout-id='16'][data-set-id='drop-shadow'] .ti-col-2 .ti-review-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(../img/download.png) 83% 94% no-repeat;
  background-size: 90%;
  opacity: 0.04;
  z-index: 1;
  pointer-events: none;
}

.ti-widget[data-layout-id="16"][data-set-id="drop-shadow"]
  .ti-reviews-container
  .ti-reviews-container-wrapper {
  gap: 20px;
}
</style>

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