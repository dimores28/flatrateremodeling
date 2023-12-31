<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo wp_get_document_title(); ?></title>

   <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/favicon-16x16.png">
   <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">

   <style>
        .video-section {
            max-width: 880px;
            margin: 50px auto;
            padding: 0px 15px;
         }

         .video-section__video {
            position: relative;
            padding-bottom: 56.25%; /*для видео из соотношением экрана 16:9*/
            height: 0;
            overflow: hidden;
         }

         .video-section__video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
         }

         body {
          padding-top: 122px;
         }

         @media (max-width: 1024px){
          body {
            padding-top: 104px;
          }
         }
   </style>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Raleway:wght@100;500;600&family=Roboto&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   
   <?php wp_head(); ?>
   <?php $BASICINFO = getContacts(); ?>
</head>
<body>

<header class="header">
    <div class="header__contacts">
      <ul class="header__left">
        <li>
          <a href="#" target="_blank">
            <span>
							<i aria-hidden="true" class="fas fa-map-marker-alt"></i>
            </span>
            <?php echo $BASICINFO['adress']; ?>
          </a>
        </li>
        <li class="ceil-border">
          <a href="mailto:<?php echo $BASICINFO['email']; ?>" target="_blank">
            <span>
							<i aria-hidden="true" class="fas fa-envelope"></i>
            </span>
            <?php echo $BASICINFO['email']; ?>
          </a>
        </li>
        <li>
          <a href="tel:<?php echo $BASICINFO['phone_one']; ?>" target="_blank">
            <span>
							<i aria-hidden="true" class="fas fa-phone-alt"></i>
            </span>
            Call Us
          </a>
        </li>
      </ul>

      <ul class="header__right">
        <li>
          <a href="<?php echo $BASICINFO['facebook_link']; ?>" class="" target="_blank">
						<i class="fab fa-facebook-f"></i>					
          </a>
        </li>
        <li>
          <a href="<?php echo $BASICINFO['twitter_link']; ?>" class="" target="_blank">
						<i class="fab fa-twitter"></i>			
          </a>
        </li>
        <li>
          <a href="<?php echo $BASICINFO['google_plus_link']; ?>" class="" target="_blank">
						<i class="fab fa-google"></i>			
          </a>
        </li>
        <li>
          <a href="<?php echo $BASICINFO['instagram_link']; ?>" class="" target="_blank">
						<i class="fab fa-instagram"></i>				
          </a>
        </li>
      </ul>
    </div>

    <div class="header__navigaton">
      <button class="burger-btn">
        <i class="fas fa-bars toggle__icon--close"></i>
        <i class="fas fa-times toggle__icon--open" style="display: none;"></i>
      </button>

      <div class="header__logo">
        <a href="/">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
        </a>
      </div>

      <?php wp_nav_menu([
          'theme_location' => 'header-menu',
          'menu' => 'nav-menu',
          'container' => 'nav',
          'container_class' => 'header__nav',
          // 'depth' => 1,
        ]);?>

      <a href="tel:tel:(888) 608-3330" class="call-btn">
        <i class="fas fa-phone-alt"></i>
      </a>
    </div>
  </header>

