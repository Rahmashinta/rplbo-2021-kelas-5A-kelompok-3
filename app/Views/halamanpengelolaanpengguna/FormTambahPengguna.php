<?= $this->extend('layout/templateKepalaTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Pengguna</h2>

            <form action="/pengguna/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="username" class="form-label "><b>Username</b></label>
                    <input type="teks" class="form-control" id="username" name="username" required autofocus value="<?= old('username'); ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="teks" class="form-control" id="password" name="password" required value="<?= old('password'); ?>">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label"><b>Nama</b></label>
                    <input type="text" class="form-control" id="nama" name="nama" required value="<?= old('nama'); ?>">
                </div>

                <div class="mb-3">
                    <label for="levelakses" class="form-label"><b>Level Akses</b></label>
                    <input type="text" class="form-control" id="levelakses" name="levelakses" required value="<?= old('levelakses'); ?>">
                </div>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>