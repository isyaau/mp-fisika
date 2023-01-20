<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79facca96d.js" crossorigin="anonymous"></script>
    <!-- meta tags -->
    <meta name="description" content="GEOGRAPHY QUIZ">
    <meta name="keywords" content="">
    <meta name="robots" content="noindex,nofollow">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
    <script src="https://kit.fontawesome.com/79facca96d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/dist/jquery.quiz.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/bg.css">
</head>

<body>
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="<?= base_url(); ?>/assets/img/poster.jpg" class="fullscreen-bg__video">
            <source src="<?= base_url(); ?>/assets/img/bg.mp4" type="video/mp4">
        </video>
    </div>
    <div>

        <br>
        <br><br>
        <!-- <div class="fs-1 text-center mt-5 text-white" style="font-family: Lucida Handwriting;">
            <b>Aplikasi Pembelajaran</b>
        </div> -->


        <!-- main -->
        <div class="container">
            <br>

            <!-- <div class="fs-1 text-center mt-5 text-white" style="font-family: Lucida Handwriting;">
            <b>Aplikasi Pembelajaran</b>
        </div> -->
            <a href="<?= base_url(); ?>/home" class="btn btn-warning btn-lg"><i class="fa-solid fa-house-user"></i></a>
            <a class="btn btn-danger" href="<?= base_url(); ?>/login/logout"><i class="fa-solid fa-right-from-bracket"></i></i></a>
        </div>
        <div id="quiz_container" class="text-white"></div>
        <div class="code_example">

        </div>

    </div>
    <!-- JS -->
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="<?= base_url(); ?>/assets/dist/jquery.quiz.js"></script>
    <script>
        $(document).ready(function() {
            $('#quiz_container').quiz({

                // path to JSON
                quizJson: "<?= base_url(); ?>/assets/json/quizgaya.json",

                // handle results
                onResults: function(good, total) {
                    var perc = good / total;
                    var alert = $('<div class="alert"></div>')
                        .prependTo(this);
                    if (perc == 0) {
                        alert.addClass('alert-danger')
                            .html('Semua salah! Anda tidak mendapatkan jawaban yang benar.<b>Skor Kamu' + good /
                                total * 100 + '</b>');
                    } else if (perc > 0 && perc <= 0.25) {

                        alert.addClass('alert-danger')
                            .html('Hasil yang buruk! Tingkatkan belajarmu. Kamu sudah benar ' + good + ' jawaban dari ' +
                                total + '. Coba Lagi. <b>Skor Kamu ' + good / total * 100 + '</b>');
                    } else if (perc > 0.25 && perc <= 0.5) {

                        alert.addClass('alert-danger')
                            .html('Hasil yang Cukup! Tingkatkan belajarmu. Kamu sudah benar ' + good + ' jawaban dari ' +
                                total + '. Kamu bisa melakukan lebih baik.  <b>Skor Kamu ' + good / total * 100 +
                                '</b>');
                    } else if (perc > 0.5 && perc <= 0.75) {

                        alert.addClass('alert-success')
                            .html('Hasil yang Cukup Bagus! Tingkatkan belajarmu. Kamu telah menjawab benar ' + good + '  dari ' +
                                total + '. Coba lagi.  <b>Skor Kamu' + good / total * 100 + '</b>');
                    } else if (perc > 0.75 && perc < 1) {

                        alert.addClass('alert-success')
                            .html('Hasil yang bagus! Tinngkatkan lagi  belajarmu untuk memperoleh hasil yang sempurna. Kamu sudah benar ' + good + ' answers on ' + total +
                                '. Kami Bangga Padamu. <b>Skor Kamu ' + good / total * 100 + '</b>'
                            );
                    } else if (perc == 1) {

                        alert.addClass('alert-success')
                            .html('Selamat, Anda telah menjawab semua pertanyaan!. <b>Skor Kamu ' +
                                good / total * 100 + '</b>');
                    }
                }

            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?lang=javascript&amp;skin=sons-of-obsidian">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>