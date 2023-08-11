<?php
/*
Template Name: Gallery
*/
?>

<?php get_header();?>

<?php 
  $gallerys = getGallery();

  $categoryKitchen    = [];
  $categoryBathroom   = [];
  $categoryRemodeling = [];
  $categoryRoom       = [];
  $categoryEnergy     = [];
  $categoryEnclosure  = [];
?>


<?php 
  // echo var_dump($gallerys); 
  // ["img"] ['title'] ["ID"]

  foreach($gallerys as $post) {
    //----------------//
    if (str_contains($post["category"], "Kitchen Gallery")) {
      $categoryKitchen[] = $post;
    }
    //----------------//
    if (str_contains($post["category"], "Bathroom Gallery")) {
      $categoryBathroom[] = $post;
    }
    //----------------//
    if (str_contains($post["category"], "General Remodeling Gallery")) {
      $categoryRemodeling[] = $post;
    }
    //----------------//
    if (str_contains($post["category"], "Room Addition & New Construction Gallery")) {
      $categoryRoom[] = $post;
    }
    //----------------//
    if (str_contains($post["category"], "Energy Efficient Product Gallery")) {
      $categoryEnergy[] = $post;
    }
    //----------------//
    if (str_contains($post["category"], "Sun Rooms & Patio Enclosure Gallery")) {
      $categoryEnclosure[] = $post;
    }
  }

?>
  
<section class="gallery gallery-page" id="gallery">
  <div class="gallery__container">

    <?php if(!empty($categoryKitchen)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryKitchen[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryKitchen as $kitchen) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $kitchen["ID"]; ?>">
                  <img
                    src="<?php echo $kitchen["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $kitchen["ID"]; ?>">
                  <?php echo $kitchen['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

    <?php if(!empty($categoryBathroom)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryBathroom[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryBathroom as $card) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <img
                    src="<?php echo $card["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <?php echo $card['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

    <?php if(!empty($categoryRemodeling)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryRemodeling[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryRemodeling as $card) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <img
                    src="<?php echo $card["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <?php echo $card['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

    <?php if(!empty($categoryRoom)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryRoom[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryRoom as $card) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <img
                    src="<?php echo $card["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <?php echo $card['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

    <?php if(!empty($categoryEnergy)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryEnergy[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryEnergy as $card) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <img
                    src="<?php echo $card["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <?php echo $card['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

    <?php if(!empty($categoryEnclosure)) { ?>
      <div class="gallery__section">
        <div class="gallery__section-heading">
          <h2><?php echo $categoryEnclosure[0]["category"]; ?></h2>
        </div>

        <div class="gallery__posts">
          <?php foreach($categoryEnclosure as $card) {?>
            <article class="gallery-post">
              <div class="gallery-post__img">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <img
                    src="<?php echo $card["img"]; ?>" 
                    alt="gallery-post thumbnail"
                    width="340"
                    height="340"
                  />
                </a>
              </div>

              <h3 class="gallery-post__title">
                <a href="https://flatrateremodeling.semempires.com/gallery-project?post_id=<?php echo $card["ID"]; ?>">
                  <?php echo $card['title']; ?> 
                </a>
              </h3>
            </article>
          <?php }?>
        </div>

      </div>
    <?php } ?>

  </div>
</section>

<section class="get-started" style="margin-top: 30px;">
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
