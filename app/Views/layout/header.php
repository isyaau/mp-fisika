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
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style.css">
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
        <a href="home.php" class="btn btn-warning btn-lg"><i class="fa-solid fa-house-user"></i></a>


        </a>
        <div class="float-end">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <audio id="track" autoplay="autoplay" loop="loop">
                <source src="pinksky.mp3" type="audio/ogg" />
            </audio>

            <div class='unmute' onclick="document.getElementById('track').muted = !document.getElementById('track').muted;$(this).toggleClass('mute')"></div>
        </div>