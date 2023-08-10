<?php get_header();?>

<?php the_post(); have_posts(); ?>

<div class="article__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp"
              width="1200"
              height="800"
             alt="post header" />
</div>

<div class="side-column-section article__container">
     
    <div class="side-column-section__content">
       
         <section class="article">
          
            <div class="article__body">
              <h1 class="article__heading">
                <?php the_title() ?>
              </h1>

              <div class="article__content">
               <?php the_content(); ?>
              </div>

              <div class="">
                <div class="article__data"> <?php echo the_time('F j Y'); ?></div>
              </div>
              <div class="blog__posts">
                <article class="post">
                  <div class="post__img">
                    <a href="#">
                      <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp" 
                        alt="post thumbnail"
                        width="380"
                        height="260"
                      />
                    </a>
                  </div>

                  <h3 class="post__title">
                    <a href="#"
                      >The Best Bathroom Remodeling Companies Near Irvine
                      California
                    </a>
                  </h3>

                  <p class="post__text">
                    If you are Looking to remodel your bathroom? Here a list of
                    the best licensed and insured bathroom remodeling companies
                    near Irvine California.
                  </p>
                  <div class="post__readMore">
                    <a class="read-more" href="#"
                      ><span>Read More</span
                      ><i class="fa-solid fa-angles-right"></i
                    ></a>
                  </div>
                </article>

                <article class="post">
                  <div class="post__img">
                    <a href="#">
                      <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/post-1-img.webp"
                        alt="post thumbnail"
                        width="380"
                        height="260"
                      />
                    </a>
                  </div>

                  <h3 class="post__title">
                    <a href="#">
                      Beautiful Bathroom Remodeling Ideas – Design Trends and
                      Decor for 2023</a
                    >
                  </h3>

                  <p class="post__text">
                    Drawing inspiration from the latest trends and a variety of
                    sources, we present 25 bathroom remodeling ideas to ignite
                    your creativity for your next project...
                  </p>
                  <div class="post__readMore">
                    <a class="read-more" href="#"
                      ><span>Read More</span
                      ><i class="fa-solid fa-angles-right"></i
                    ></a>
                  </div>
                </article>
            
              
            </div>
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
</div>
<?php get_footer();?>