<?php
/*
Template Name: Category
*/
?>

<!-- <pre>
        <?php print_r(getSlider()); ?> 
</pre> -->

<!-- <pre style="margin-top:30px;">
        <?php print_r(getSliderLeft()); ?> 
</pre> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FLATRATE</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Raleway:wght@100;500;600&family=Roboto&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />

</head>

<body> -->
<?php get_header();?>
<section class="reviews" id="reviews">
    <div class="reviews__container">
      <h2 class="reviews__heading">What Our Customers Are Saying.</h2>
      <div class="reviews__content">

        <div class="reviews__slider swiper">
          <div class="reviews__wrapper swiper-wrapper">

            <div class="reviews__slide swiper-slide review">
              <div class="review__head">
                <div class="review__photo">
                  <img src="assets/img/unnamed.png" alt="photo" width="40" height="40" />
                </div>
                <div>
                  <h3 class="review__fullname">Carol E.</h3>
                  <div class="review__date">May 3, 2023</div>
                </div>
              </div>

              <div class="rating review__rating">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" class="rating__item" value="1" name="rating" />
                    <input type="radio" class="rating__item" value="2" name="rating" />
                    <input type="radio" class="rating__item" value="3" name="rating" />
                    <input type="radio" class="rating__item" value="4" name="rating" />
                    <input type="radio" class="rating__item" value="5" name="rating" />
                  </div>
                </div>
                <div class="rating__value">5</div>
              </div>

              <p class="review__text">
                Oh my God I would just like to say…THEY ARE AMAZINGG. They
                did such an amazing job seriously 100/10. Im so glad I
                found them. They did everything I asked for and more!
              </p>
              <button class="review__link">Read More</button>
            </div>

            <div class="reviews__slide swiper-slide review">
              <div class="review__head">
                <div class="review__photo">
                  <img src="assets/img/unnamed.png" alt="photo" width="40" height="40" />
                </div>
                <div>
                  <h3 class="review__fullname">Carol E.</h3>
                  <div class="review__date">May 3, 2023</div>
                </div>
              </div>

              <div class="rating review__rating">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" class="rating__item" value="1" name="rating" />
                    <input type="radio" class="rating__item" value="2" name="rating" />
                    <input type="radio" class="rating__item" value="3" name="rating" />
                    <input type="radio" class="rating__item" value="4" name="rating" />
                    <input type="radio" class="rating__item" value="5" name="rating" />
                  </div>
                </div>
                <div class="rating__value">5</div>
              </div>

              <p class="review__text">
                Oh my God I would just like to say…THEY ARE AMAZINGG. They
                did such an amazing job seriously 100/10. Im so glad I
                found them. They did everything I asked for and more!
              </p>
              <button class="review__link">Read More</button>
            </div>

            <div class="reviews__slide swiper-slide review">
              <div class="review__head">
                <div class="review__photo">
                  <img src="assets/img/unnamed.png" alt="photo" width="40" height="40" />
                </div>
                <div>
                  <h3 class="review__fullname">Carol E.</h3>
                  <div class="review__date">May 3, 2023</div>
                </div>
              </div>

              <div class="rating review__rating">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" class="rating__item" value="1" name="rating" />
                    <input type="radio" class="rating__item" value="2" name="rating" />
                    <input type="radio" class="rating__item" value="3" name="rating" />
                    <input type="radio" class="rating__item" value="4" name="rating" />
                    <input type="radio" class="rating__item" value="5" name="rating" />
                  </div>
                </div>
                <div class="rating__value">5</div>
              </div>

              <p class="review__text">
                Oh my God I would just like to say…THEY ARE AMAZINGG. They
                did such an amazing job seriously 100/10. Im so glad I
                found them. They did everything I asked for and more!
              </p>
              <button class="review__link">Read More</button>
            </div>

            <div class="reviews__slide swiper-slide review">
              <div class="review__head">
                <div class="review__photo">
                  <img src="assets/img/unnamed.png" alt="photo" width="40" height="40" />
                </div>
                <div>
                  <h3 class="review__fullname">Carol E.</h3>
                  <div class="review__date">May 3, 2023</div>
                </div>
              </div>

              <div class="rating review__rating">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" class="rating__item" value="1" name="rating" />
                    <input type="radio" class="rating__item" value="2" name="rating" />
                    <input type="radio" class="rating__item" value="3" name="rating" />
                    <input type="radio" class="rating__item" value="4" name="rating" />
                    <input type="radio" class="rating__item" value="5" name="rating" />
                  </div>
                </div>
                <div class="rating__value">5</div>
              </div>

              <p class="review__text">
                Oh my God I would just like to say…THEY ARE AMAZINGG. They
                did such an amazing job seriously 100/10. Im so glad I
                found them. They did everything I asked for and more!
              </p>
              <button class="review__link">Read More</button>
            </div>

            <div class="reviews__slide swiper-slide review">
              <div class="review__head">
                <div class="review__photo">
                  <img src="assets/img/unnamed.png" alt="photo" width="40" height="40" />
                </div>
                <div>
                  <h3 class="review__fullname">Carol E.</h3>
                  <div class="review__date">May 3, 2023</div>
                </div>
              </div>

              <div class="rating review__rating">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" class="rating__item" value="1" name="rating" />
                    <input type="radio" class="rating__item" value="2" name="rating" />
                    <input type="radio" class="rating__item" value="3" name="rating" />
                    <input type="radio" class="rating__item" value="4" name="rating" />
                    <input type="radio" class="rating__item" value="5" name="rating" />
                  </div>
                </div>
                <div class="rating__value">5</div>
              </div>

              <p class="review__text">
                Oh my God I would just like to say…THEY ARE AMAZINGG. They
                did such an amazing job seriously 100/10. Im so glad I
                found them. They did everything I asked for and more!
              </p>
              <button class="review__link">Read More</button>
            </div>

          </div>
        </div>

      </div>
    </div>
</section>

<?php get_footer();?>
