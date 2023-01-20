 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fisika</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/79facca96d.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/bg.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
     <style>
         .unmute {
             background-image: url(<?= base_url(); ?>/assets/img/unmute.png);
             background-size: cover;
             width: 100px;
             height: 100px;
             cursor: pointer;
         }

         .mute {
             background-image: url(<?= base_url(); ?>/assets/img/mute.png);
         }
     </style>
 </head>

 <body>
     <div class="fullscreen-bg">
         <video loop muted autoplay poster="<?= base_url(); ?>/assets/img/poster.jpg" class="fullscreen-bg__video">
             <source src="<?= base_url(); ?>/assets/img/bg.mp4" type="video/mp4">
         </video>
     </div>
     <div class="container">
         <br>

         <!-- <div class="fs-1 text-center mt-5 text-white" style="font-family: Lucida Handwriting;">
            <b>Aplikasi Pembelajaran</b>
        </div> -->



         </a>
         <a href="/home" class="btn btn-warning btn-lg"><i class="fa-solid fa-house-user"></i></a>
         <a class="btn btn-danger" href="<?= base_url(); ?>/login/logout"><i class="fa-solid fa-right-from-bracket"></i></i></a>
         <div class="float-end">
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

             <audio id="track" autoplay="autoplay" loop="loop">
                 <source src="<?= base_url(); ?>/assets/pinksky.mp3" type="audio/ogg" />
             </audio>

             <div class='unmute' onclick="document.getElementById('track').muted = !document.getElementById('track').muted;$(this).toggleClass('mute')"></div>
         </div>

         <?= $this->rendersection('content'); ?>
         <!-- JS -->
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

     <script type="text/javascript">
         var myAudio = document.getElementById("Audio");
         var isPlaying = true;

         function togglePlay() {
             myAudio.play();
             terakhir = document.querySelector('#box');
             terakhir.classList.add('hide');
         };
     </script>
 </body>

 </html>