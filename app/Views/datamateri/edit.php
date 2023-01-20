<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Media Pembelajaran Fisika</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Materi</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/datamateri/update/<?= $datamateri['id_materi']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_materi" value="<?= (old('id_materi')) ? old('id_materi') : $datamateri['id_materi']; ?>">
                    <div class="form-group row">
                        <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
                        <div class="col-sm-5">
                            <input name="nama_materi" type="text" id="nama_materi" disabled class="form-control" value="<?= (old('nama_materi')) ? old('nama_materi') : $datamateri['nama_materi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_materi'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <select name="status" class="form-select <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" aria-label=" Default select example">
                                <option selected value="<?= (old('status')) ? old('status') : $datamateri['status']; ?>">
                                    <?php
                                    if ((old('status')) ? old('status') : $datamateri['status'] == 1) { ?>
                                        Active
                                    <?php } else { ?>
                                        Non Active
                                    <?php }; ?>
                                </option>
                                <option value="0">Non Active</option>
                                <option value="1">Active</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('status'); ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/datamateri" class="btn btn-success  float-right">Kembali</a>

                    </div>
            </div>
        </div>
    </div>


</div>
</form>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>