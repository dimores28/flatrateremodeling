
<footer class="footer" id="contacts" data-watch="navigator">
  <div class="footer__body">
    <div class="logo">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" class="logo__img" />
      <span class="license"><?= get_field("license"); ?></span>
    </div>
    <div class="last-post">
      <h3 class="last-post__heading footer-title">RECENT POSTS</h3>

      <?php
        global $post;

        $myposts = get_posts([ 
          'numberposts' => 3,
          'order'       => 'DESC',
          'category'    => 0
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
                setup_postdata( $post );
      ?>
        <div class="last-post__item">
          <div class="last-post__data"><?php echo the_time('F j'); ?></div>
          <a class="last-post__title" href="<?php echo get_the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </div>

      <?php 
            }
          } wp_reset_postdata(); // Сбрасываем $post 
      ?>
    </div>
    <div class="contact">
      <h3 class="contacts__title footer-title">CONTACT INFO</h3>
      <a href="tel:<?= get_field("phone_one"); ?>" class="contacts__link">
        <span><?= get_field("phone_one"); ?></span>
      </a>
      <a href="tel:<?= get_field("phone_two"); ?>" class="contacts__link">
        <span><?= get_field("phone_two"); ?></span>
      </a>
      <a href="mailto:<?= get_field("email"); ?>" class="contacts__link">
        <span><?= get_field("email"); ?></span>
      </a>

      <a class="contacts__link" href="https://flatrateremodeling.semempires.com/privacy-policy">Privacy Policy</a>
    </div>
    <div class="instagram-post">
      <h3 class="instagram-post__title footer-title">PHOTO STREAM</h3>
      <div class="instagram-post__body">
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f1.jpg" alt="instagram" width="75" height="75"/></div>
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f2.jpg" alt="instagram"width="75" height="75"/></div>
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f3.jpg" alt="instagram" width="75" height="75"/></div>
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f4.jpg" alt="instagram" width="75" height="75"/></div>
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f5.jpg" alt="instagram" width="75" height="75"/></div>
        <div class="instagram-post__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/f6.jpg" alt="instagram" width="75" height="75"/></div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="copyright__body">
      <p class="copyright__text">© 2022 Flat Rate Remodeling, Inc.,</p>
      <div class="sns">
        <a class="sns__link" href="<?= get_field("facebook_link"); ?>"><i class="fa-brands fa-facebook-f"></i></a>
        <a class="sns__link" href="<?= get_field("twitter_link"); ?>"><i class="fa-brands fa-twitter"></i></a>
        <a class="sns__link" href="<?= get_field("google_plus_link"); ?>"><i class="fa-brands fa-google"></i></a>
        <a class="sns__link" href="<?= get_field("instagram_link"); ?>"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>


<button class="btn-up">
  <svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
    <path fill="#fff" d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
  </svg>
</button>


<div id="popup_1" class="popup">
  <div class="popup__body">
    <div class="popup__content">
      <a href="#header" class="popup__close close-popup"><i class="fa-solid fa-xmark"></i></a>
      <div class="popup__logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" class="logo__img" />
      </div>
      <div class="feedback feedback-black">
        <form class="feedback__form popup__form" id="popup__form">
          <div class="form__loader"><span class="loader"></span></div>
          <input
            class="form-control popup__name"
            name="yourName"
            type="text"
            placeholder="Name"
            aria-label="your name"
            id="popup__name"
          />
          <input
            class="form-control"
            name="yourEmail"
            type="email"
            placeholder="Email"
            aria-label="your email"
            id="popup__email"
          />
          <input
            class="form-control"
            name="yourPhone"
            type="text"
            placeholder="Phone"
            aria-label="your phone"
            id="popup__phone"
          />
          <textarea
            class="form-control"
            name="yourMessage"
            placeholder="Message"
            aria-label="your message"
            id="popup__message"
          ></textarea>
          <div class="popup__alert"></div>
          <input type="submit" class="btn form-btn" value="Send" />
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <?php wp_footer();?>
</body>
</html>