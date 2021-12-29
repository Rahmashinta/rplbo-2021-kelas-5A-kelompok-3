<?= $this->extend('layout/templateresepsionis'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Surat Legalisir</h2>

            <form action="/suratlegalisirresepsionis/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="nama" class="form-label"><b>Nama Siswa</b></label>
                    <input type="teks" class="form-control" id="nama" name="nama" required autofocus value="<?= old('nama'); ?>">

                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label"><b>Kelas</b></label>
                    <input type="teks" class="form-control" id="kelas" name="kelas" required value="<?= old('kelas'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tahunAjaran" class="form-label"><b>Tahun Ajaran</b></label>
                    <input type="text" class="form-control" id="tahunAjaran" name="tahunAjaran" required value="<?= old('tahunAjaran'); ?>">
                </div>

                <div class="mb-3">
                    <label for="fileSurat" class="form-label"><b>File Surat</b></label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" required value="<?= old('fileSurat'); ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>