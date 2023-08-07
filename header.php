<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FLATRATE</title>

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
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   
   <?php wp_head(); ?>
</head>
<body>

