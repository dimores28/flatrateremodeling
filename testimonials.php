<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header();?>
<div class="side-column-section">
    <div class="side-column-section__content">

    </div>
    <aside class="side-column-section__aside">
    <div class="aside-form">
        <h2 class="aside-form__title">
        Schedule A Free Consultation
        </h2>
        <div class="feedback">
        <form class="feedback__form">
            <input class="form-control" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <input class="form-control" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <textarea class="form-control" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <button type="submit" class="aside-form__btn">
            <span>Send</span>
            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
            </button>
        </form>
        </div>
    </div>
    </aside>

</div>
<?php get_footer();?>