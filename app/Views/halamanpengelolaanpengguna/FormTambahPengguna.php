<?= $this->extend('layout/templateKepalaTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Pengguna</h2>

            <form action="/pengguna/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input type="teks" class="form-control" id="username" name="username" autofocus value="<?= old('username'); ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="teks" class="form-control" id="password" name="password" value="<?= old('password'); ?>">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                </div>

                <div class="mb-3">
                    <label for="levelakses" class="form-label">Level Akses</label>
                    <input type="text" class="form-control" id="levelakses" name="levelakses" value="<?= old('levelakses'); ?>">
                </div>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>