<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>

<div class="row text-center my-5">
    <div class="col">


        <video width="950" height="400" autoplay loop muted playsinline>
            <source src="<?= base_url(); ?>/assets/img/roda4.mp4" type="video/mp4" />
            Browsermu tidak mendukung tag ini, upgrade donk!
        </video>

    </div>
    <div class="row">
        <div class="col">
            <div class="float-start"><a href="<?= base_url(); ?>/roda/3" class="btn btn-danger">Back</a></div>
            <div class="float-end"><a href="<?= base_url(); ?>/roda/5" class="btn btn-success">Next</a></div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>