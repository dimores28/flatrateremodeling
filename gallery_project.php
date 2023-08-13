<?php
/*
Template Name: Gallery project
*/
?>
<?php get_header();?>

<?php $id =  $_GET['post_id'];  ?>

<?php 
if(!empty($id)) {
  $body = getGalleryProjectByID($id);
}
?>

<!-- <pre> <?php var_dump($body); ?> </pre> -->

<?php if(!empty($body)) { ?>
   <?php echo $body[0]["editor"]; ?>
<?php } ?> 

<div class="side-column-section article__container" style="padding-top: 0;">
     
    <div class="side-column-section__content">
      <?php if(!empty($body)) { ?>
     
       <section class="post-gallery">
            <div class="post-gallery__header">
              <div class="post-gallery__title">
                <h3><?php echo $body[0]["title"]; ?></h3>
              </div>
              <div class="post-gallery__title-location">
                <h3><?php echo $body[0]["location"]; ?></h3>
              </div>
            </div>
            <div class="post-gallery__content">
              <div class="post-gallery__location">
                <h4 class="post-gallery__location-title">
                  <i class="fa-regular fa-square"></i>Location
                </h4>
                <p class="post-gallery__location-text"><?php echo $body[0]["location"]; ?></p>
              </div>
              <div class="post-gallery__date">
                <h4 class="post-gallery__date-title">
                  <i class="fa-regular fa-square"></i>Year Winter
                </h4>
                <p class="post-gallery__date-text"><?php echo $body[0]["year_winter"]; ?></p>
              </div>

              <div class="post-gallery__budget">
                <h4 class="post-gallery__budget-title">
                  <i class="fa-regular fa-square"></i>Budget
                </h4>
                <p class="post-gallery__budget-text"><?php echo $body[0]["budget"]; ?></p>
              </div>
              <div class="post-gallery__turnaround">
                <h4 class="post-gallery__turnaround-title">
                  <i class="fa-regular fa-square"></i>Turnaround
                </h4>
                <p class="post-gallery__turnaround-text"><?php echo $body[0]["turnaround"]; ?></p>
              </div>
            </div>
            <div class="logo post-gallery__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" class="logo__img" />
            </div>
          </section>
     <?php } ?>   

     <div class="reviews-gallery">
      <?php echo do_shortcode('[trustindex data-widget-id=f6802bd185c2719c5e7696a1893]'); ?>
     </div>
    </div>
    <aside class="side-column-section__aside ">
    <div class="aside-form" style="padding: 0px; margin-bottom:20px;">
        <div class="contact-secton__form">
          <h2 class="contact-secton__title">Get a FREE Estimate</h2>
          <p class="contact-secton__sub-title">
              Schedule an in-home appointment
          </p>
          <form class="feedback__form" id="smallForm">
            <div class="form__loader"><span class="loader"></span></div>
              <input class="form-control" id="smallFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
              <input class="form-control" id="smallFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
              <input class="form-control" id="smallFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
              <div class="smallForm__alert"></div>
              <input type="submit" class="btn form-btn" value="Scheudle an Appointment" />
              
          </form>
      </div>
    </div>
    <div class="aside-map">
      <?php if(!empty($body)) { ?>
         <?php echo $body[0]["map_location"]; ?>
      <?php } ?> 
    </div>
    </aside>
</div>
<section class="contact-secton">
    <div class="contact-secton__container">
        <div class="contact-secton__form" style="padding: 0; border: none; background: #fff;">
        <form class="feedback__form" id="bigForm">
            <div class="form__loader"><span class="loader"></span></div>
            <input class="form-control" id="bigFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" id="bigFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <input class="form-control" id="bigFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <textarea class="form-control" id="bigFormMessage" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <div class="bigForm__alert"></div>
            <input type="submit" class="btn form-btn" value="Send" style="max-width: 140px; text-transform: uppercase; letter-spacing: 2px;" />
        </form>
        </div>
        <div class="contact-secton__info">
        <h2 class="contact-secton__row contact-secton__row_head">
            Contact Information
        </h2>
        <div class="contact-secton__row">
            <a href="tel:8886083330">
            Toll Free: (888) 608-3330
            </a>
        </div>
        <div class="contact-secton__row">
            <a href="tel:3237617540">
            Toll Free:(323) 761-7540
            </a>
        </div>
        <div class="contact-secton__row">
            <a href="mailto:tal@flatrateremodeling.com" >
            tal@flatrateremodeling.com
            </a>
        </div>
        </div>
    </div>

   </div>
</section>
<?php get_footer();?>
