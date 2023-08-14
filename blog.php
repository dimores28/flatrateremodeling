<?php
/*
Template Name: Blog
*/
?>

<?php get_header();?>
<div class="side-column-section">
    <div class="side-column-section__content">
        <div class="blog__posts">
          <?php
               global $post;

               $myposts = get_posts([ 
                  'numberposts' => -1,
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
                                    array(360, 300),
                                    array('alt'   => "Post thumbnail",)
                                 );
                              } else { ?>
                                 <img src="<?php bloginfo('template_url'); ?>/assets/img/post-img.webp" alt="Post thumbnail" />
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
    <aside class="side-column-section__aside">
    <div class="aside-form">
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
<script>
   setTimeout(function(){
      const postContent = document.querySelectorAll('.post__text');
      postContent?.forEach(elem => {
         const text = elem.querySelector("p");
         elem.innerText = text.innerText;
      });
   }, 100);
   
</script>

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