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
   </style>
   
   <?php wp_head(); ?>
</head>
<body>

