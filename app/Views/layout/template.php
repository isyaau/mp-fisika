    <?php $rule = session()->get('rule');
    if ($rule == 1) { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title><?= $title; ?></title>

            <!-- Custom fonts for this template-->
            <link href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <script src="https://kit.fontawesome.com/79facca96d.js" crossorigin="anonymous"></script>
            <!-- Custom styles for this template-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        </head>
        <link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

        </head>

        <body id="page-top">

            <?php $rule = session()->get('rule');
            if ($rule == 1) { ?>
                <?= $this->include('layout/navbarpemilik'); ?>
            <?php } else { ?>
                <?= $this->include('layout/home'); ?>
            <?php }; ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>

        </html>


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin keluar ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(); ?>/assets/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url(); ?>/assets/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
        <script src="<?= base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>

        </body>

        </html>
    <?php }
    if ($rule == 2) { ?>
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
            <script src="https://kit.fontawesome.com/79facca96d.js" crossorigin="anonymous"></script>
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
                <a class="btn btn-danger" href="login/logout"><i class="fa-solid fa-right-from-bracket"></i></i></a>
                <div class="float-end">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                    <audio id="track" autoplay="autoplay" loop="loop">
                        <source src="<?= base_url(); ?>/assets/pinksky.mp3" type="audio/ogg" />
                    </audio>

                    <div class='unmute' onclick="document.getElementById('track').muted = !document.getElementById('track').muted;$(this).toggleClass('mute')"></div>
                </div>

                <?= $this->include('home/home'); ?>
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
    <?php }; ?>