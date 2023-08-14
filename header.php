<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo wp_get_document_title(); ?></title>

   <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
   <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
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

         .elementor-element .swiper-container .swiper-horizontal>.swiper-pagination-bullets, .elementor-element .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container .swiper-pagination-custom, .elementor-element .swiper-container .swiper-pagination-fraction, .elementor-element .swiper-container~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container~.swiper-pagination-custom, .elementor-element .swiper-container~.swiper-pagination-fraction, .elementor-element .swiper .swiper-horizontal>.swiper-pagination-bullets, .elementor-element .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper .swiper-pagination-custom, .elementor-element .swiper .swiper-pagination-fraction, .elementor-element .swiper~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper~.swiper-pagination-custom, .elementor-element .swiper~.swiper-pagination-fraction, .elementor-lightbox .swiper-container .swiper-horizontal>.swiper-pagination-bullets, .elementor-lightbox .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container .swiper-pagination-custom, .elementor-lightbox .swiper-container .swiper-pagination-fraction, .elementor-lightbox .swiper-container~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container~.swiper-pagination-custom, .elementor-lightbox .swiper-container~.swiper-pagination-fraction, .elementor-lightbox .swiper .swiper-horizontal>.swiper-pagination-bullets, .elementor-lightbox .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper .swiper-pagination-custom, .elementor-lightbox .swiper .swiper-pagination-fraction, .elementor-lightbox .swiper~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper~.swiper-pagination-custom, .elementor-lightbox .swiper~.swiper-pagination-fraction {
               opacity: 0 !important;
            }
         

         @media (max-width: 1024px){
               .elementor-element .swiper-container .swiper-horizontal>.swiper-pagination-bullets, .elementor-element .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container .swiper-pagination-custom, .elementor-element .swiper-container .swiper-pagination-fraction, .elementor-element .swiper-container~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container~.swiper-pagination-custom, .elementor-element .swiper-container~.swiper-pagination-fraction, .elementor-element .swiper .swiper-horizontal>.swiper-pagination-bullets, .elementor-element .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper .swiper-pagination-custom, .elementor-element .swiper .swiper-pagination-fraction, .elementor-element .swiper~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper~.swiper-pagination-custom, .elementor-element .swiper~.swiper-pagination-fraction, .elementor-lightbox .swiper-container .swiper-horizontal>.swiper-pagination-bullets, .elementor-lightbox .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container .swiper-pagination-custom, .elementor-lightbox .swiper-container .swiper-pagination-fraction, .elementor-lightbox .swiper-container~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container~.swiper-pagination-custom, .elementor-lightbox .swiper-container~.swiper-pagination-fraction, .elementor-lightbox .swiper .swiper-horizontal>.swiper-pagination-bullets, .elementor-lightbox .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper .swiper-pagination-custom, .elementor-lightbox .swiper .swiper-pagination-fraction, .elementor-lightbox .swiper~.swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper~.swiper-pagination-custom, .elementor-lightbox .swiper~.swiper-pagination-fraction {
               opacity: 1 !important;
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
             Agoura Rd Unit 102-406 Calabasas
          </a>
        </li>
        <li class="ceil-border">
          <a href="#" target="_blank">
            <span>
							<i aria-hidden="true" class="fas fa-envelope"></i>
            </span>
            tal@flatrateremodeling.com
          </a>
        </li>
        <li>
          <a href="tel:(888) 608-3330" target="_blank">
            <span>
							<i aria-hidden="true" class="fas fa-phone-alt"></i>
            </span>
            Call Us
          </a>
        </li>
      </ul>

      <ul class="header__right">
        <li>
          <a href="https://www.facebook.com/flatrateremodelingla" class="" target="_blank">
						<i class="fab fa-facebook-f"></i>					
          </a>
        </li>
        <li>
          <a href="https://twitter.com/flatrateremodel" class="" target="_blank">
						<i class="fab fa-twitter"></i>			
          </a>
        </li>
        <li>
          <a href="https://www.google.com/#q=flat+rate+remodeling" class="" target="_blank">
						<i class="fab fa-google"></i>			
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/flatrateremodeling" class="" target="_blank">
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

      <nav class="header__nav">
        <ul class="menu">
          <li class="menu__item">
            <a href="/">Home</a>
          </li>
          <li class="menu__item">
            <a href="https://flatrateremodeling.semempires.com/about/">About Us</a>
          </li>
          <li class="menu__item menu__item_list dropdown">
            <a href="#" class="dropbtn">Services <i class="fas fa-caret-down" style="margin-left: 4px;"></i></a>
            <ul class="submenu">
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/remodeling/">
                  Kitchen Design & Remodeling
                </a>
              </li>
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/energy-efficient-products/">
                  Energy Efficient Products
                </a>
              </li>
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/sun-rooms-patio-enclosures/">
                  Sun Rooms & Patio Enclosures
                </a>
              </li>
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/bathroom-design-remodeling/">
                  Bathroom Design & Remodeling
                </a>
              </li>
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/general-home-renovations/">
                  General Home Renovations
                </a>
              </li>
              <li class="submenu__item">
                <a href="https://flatrateremodeling.semempires.com/additions-new-construction/">
                  Additions & New Construction
                </a>
              </li>
            </ul>
          </li>
          <li class="menu__item">
            <a href="https://flatrateremodeling.semempires.com/testimonials/">Testimonials</a>
          </li>
          <li class="menu__item">
            <a href="https://flatrateremodeling.semempires.com/gallery/">Gallery</a>
          </li>
          <li class="menu__item">
            <a href="https://flatrateremodeling.semempires.com/blog/">Blog</a>
          </li>
          <li class="menu__item">
            <a href="https://flatrateremodeling.semempires.com/contact-us/">Contact us</a>
          </li>
          <li class="menu__item" style="padding-bottom: 20px;">
            <a href="https://flatrateremodeling.semempires.com/locations/">Locations</a>
          </li>
        </ul>
      </nav>

      <a href="tel:tel:(888) 608-3330" class="call-btn">
        <i class="fas fa-phone-alt"></i>
      </a>
    </div>
  </header>

