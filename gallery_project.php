<?php
/*
Template Name: Gallery project
*/
?>
<?php get_header();?>

<?php echo $_GET['post_id'];  ?>

<div class="side-column-section article__container">
     
    <div class="side-column-section__content">
       <section class="post-gallery">
            <div class="post-gallery__header">
              <div class="post-gallery__title">
                <h3>Master Bath Renovation</h3>
              </div>
              <div class="post-gallery__title-location">
                <h3>Brentwood, CA</h3>
              </div>
            </div>
            <div class="post-gallery__content">
              <div class="post-gallery__location">
                <h4 class="post-gallery__location-title">
                  <i class="fa-regular fa-square"></i>Location
                </h4>
                <p class="post-gallery__location-text">Brentwood, CA</p>
              </div>
              <div class="post-gallery__date">
                <h4 class="post-gallery__date-title">
                  <i class="fa-regular fa-square"></i>Year Winter
                </h4>
                <p class="post-gallery__date-text">2023</p>
              </div>

              <div class="post-gallery__budget">
                <h4 class="post-gallery__budget-title">
                  <i class="fa-regular fa-square"></i>Budget
                </h4>
                <p class="post-gallery__budget-text">$38,000 - $42,000</p>
              </div>
              <div class="post-gallery__turnaround">
                <h4 class="post-gallery__turnaround-title">
                  <i class="fa-regular fa-square"></i>Turnaround
                </h4>
                <p class="post-gallery__turnaround-text">4 Months</p>
              </div>
            </div>
            <div class="logo post-gallery__logo">
              <img src="img/logo.png" alt="logo" class="logo__img" />
            </div>
          </section>
        
    </div>
    <aside class="side-column-section__aside ">
    <div class="aside-form">
        <h2 class="aside-form__title">
        Schedule A Free Consultation
        </h2>
        <div class="feedback">
        <form class="feedback__form">
            <input class="form-control" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <input class="form-control" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <textarea class="form-control" name="yourMessage" placeholder="Message"
            aria-label="your message"></textarea>
            <button type="submit" class="aside-form__btn">
            <span>Send</span>
            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
            </button>
        </form>
        </div>
    </div>
    <div class class="aside-map">
    <!-- Map -->
    </div>
    </aside>

    <section class="contact-secton">
    <div class="contact-secton__container">
        <div class="contact-secton__form">
        <h2 class="contact-secton__title">Get a FREE Estimate</h2>
        <p class="contact-secton__sub-title">
            Schedule an in-home appointment
        </p>
        <form class="feedback__form">
            <input class="form-control" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <input class="form-control" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <textarea class="form-control" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <input type="submit" class="btn form-btn" value="Scheudle an Appointment" />
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
</div>
<?php get_footer();?>
