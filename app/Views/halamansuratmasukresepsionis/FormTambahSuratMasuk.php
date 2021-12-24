<?= $this->extend('layout/templateResepsionis'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Surat Masuk</h2>

            <form action="/suratmasukresepsionis/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="asalSurat" class="form-label "><b>Asal Surat</b></label>
                    <input type="teks" class="form-control" id="asalSurat" name="asalSurat" required autofocus value="<?= old('asalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label"><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" required value="<?= old('tanggalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label"><b>Perihal Surat</b></label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" required value="<?= old('perihalSurat'); ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>