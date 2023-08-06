<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

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
   
   <?php wp_head(); ?>
</head>
<body>

