<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.1169640885055!2d-118.69911760000001!3d34.1433496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b93318414cb3%3A0xce1f41095700f13d!2sFlat%20Rate%20Home%20Remodeling%20%26%20Kitchen%20Builder!5e0!3m2!1sru!2sua!4v1691483640993!5m2!1sru!2sua"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<main class="main">
<section class="contact-secton">
    <div class="contact-secton__container">
        <div class="contact-secton__form">
        <h2 class="contact-secton__title">Get a FREE Estimate</h2>
        <p class="contact-secton__sub-title">
            Schedule an in-home appointment
        </p>
        <form class="feedback__form" id="bigForm">
            <div class="form__loader"><span class="loader"></span></div>
            <input class="form-control" id="bigFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" id="bigFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <input class="form-control" id="bigFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <textarea class="form-control" id="bigFormEmail" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <div class="bigForm__alert"></div>
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
</main>

<?php get_footer();?>