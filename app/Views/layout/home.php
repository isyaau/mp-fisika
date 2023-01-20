<div class="container">

    <div class="fs-1 text-center mt-5 text-white" style="font-family: Lucida Handwriting;">
        <b>Aplikasi Pembelajaran Fisika</b>
    </div>
    <div class="fs-3 text-center text-white" style="font-family: Impact;">
        Daftar Materi
    </div>
    <div class="row text-center my-5">
        <div class="col">
            <audio id="Audio" src="musik/musik1.mp3"></audio>
            <!-- Usaha -->
            <?php
            if ($usaha['status'] == 1) { ?>
                <a href="usaha.php" class="btn mx-3 fs-1" style="background-color: #ffee93; height: 100px; width: 300px; font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Usaha</div>
                </a>
            <?php } else { ?>
                <a href="#" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px; font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Usaha</div>
                </a>
            <?php }; ?>

            <!-- TuasPengungkit -->
            <?php
            if ($tuaspengungkit['status'] == 1) { ?>
                <a href="tuas1.php" class="btn mx-3 fs-1" style="background-color: #d4afb9; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Tuas Pengungkit</div>
                </a>
            <?php } else { ?>
                <a href="#" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Tuas Pengungkit</div>
                </a>
            <?php }; ?>


            <!-- BidangMiring -->
            <?php
            if ($bidangmiring['status'] == 1) { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: #7ec4cf; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Bidang Miring</div>
                </a>
            <?php } else { ?>
                <a href="#" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Bidang Miring</div>
                </a>
            <?php }; ?>




        </div>
    </div>
    <div class="row text-center my-5">
        <div class="col">
            <!-- Katrol -->
            <?php $rule = session()->get('rule');
            if ($katrol['status'] == 1) { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: #ffc09f; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Katrol</div>
                </a>
            <?php } else { ?>
                <a href="#" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Katrol</div>
                </a>
            <?php }; ?>

            <!-- RodaBergerigi -->
            <?php $rule = session()->get('rule');
            if ($rodabergerigi['status'] == 1) { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: #adf7b6; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Roda Bergerigi</div>
                </a>
            <?php } else { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Roda Bergerigi</div>
                </a>
            <?php }; ?>

            <!-- Gaya -->
            <?php $rule = session()->get('rule');
            if ($gaya['status'] == 1) { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: #adf7b6; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex align-items-center justify-content-center mt-2">Gaya</div>
                </a>
            <?php } else { ?>
                <a href="btn" class="btn mx-3 fs-1" style="background-color: white; height: 100px; width: 300px;font-family: Lucidatypewriter;">
                    <div class="d-flex text-muted align-items-center justify-content-center mt-2">Gaya</div>
                </a>
            <?php }; ?>



        </div>
    </div>