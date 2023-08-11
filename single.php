<?php get_header();?>

<?php the_post(); have_posts(); ?>

<div class="article__img">
            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp"
              width="1200"
              height="800"
             alt="post header" /> -->
  <?php 
  if(has_post_thumbnail()) {
    the_post_thumbnail(
        array(1200, 800),
        array('alt'   => "Post thumbnail",)
    );
  } else { ?>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp"" alt="Post thumbnail" />
  <?php } ?>
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

                            <article class="post">
                                <div class="post__img">
                                  <a href="<?php echo get_the_permalink(); ?>">
                                      <?php 
                                      if(has_post_thumbnail()) {
                                        the_post_thumbnail(
                                            array(380, 260),
                                            array('alt'   => "Post thumbnail",)
                                        );
                                      } else { ?>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp"" alt="Post thumbnail" />
                                      <?php } ?>
                                  </a>
                                </div>

                                <h3 class="post__title">
                                  <a href="<?php echo get_the_permalink(); ?>">
                                    <?php the_title(); ?>
                                  </a>
                                </h3>

                                <div class="post__text">
                                    <?php the_content(); ?>
                                </div>
                                
                                <div class="post__readMore">
                                  <a class="read-more" href="<?php echo get_the_permalink(); ?>">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-angles-right"></i>
                                  </a>
                                </div>
                              </article>

                          <?php 
                          }
                      } wp_reset_postdata(); // Сбрасываем $post 
                    ?>
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
        <form class="feedback__form" id="smallForm">
            <input class="form-control" id="smallFormName" name="yourName" type="text" placeholder="Name" aria-label="your name" />
            <input class="form-control" id="smallFormEmail" name="yourEmail" type="email" placeholder="Email" aria-label="your email" />
            <input class="form-control" id="smallFormPhone" name="yourPhone" type="text" placeholder="Phone" aria-label="your phone" />
            <textarea class="form-control" id="smallFormMessage" name="yourMessage" placeholder="Message" aria-label="your message"></textarea>
            <button type="submit" class="aside-form__btn">
            <span>Send</span>
            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
            </button>
        </form>
        </div>
    </div>
    </aside>
</div>
<script>
   setTimeout(function(){
      const postContent = document.querySelectorAll('.post__text');
      postContent?.forEach(elem => {
         const text = elem.querySelector("p");
         elem.innerText = text.innerText;
      });
   }, 100);
   
</script>
<?php get_footer();?>