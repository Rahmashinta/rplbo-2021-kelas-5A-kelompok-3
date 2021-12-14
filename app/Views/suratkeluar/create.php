<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Surat Keluar</h2>

            <form action="/suratkeluar/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="penerimaSurat" class="form-label ">Asal Surat</label>
                    <input type="teks" class="form-control" id="penerimaSurat" name="penerimaSurat" autofocus value="<?= old('penerimaSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= old('tanggalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label">Perihal Surat</label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= old('perihalSurat'); ?>">
                </div>
                <!-- <div class="mb-3">
                    <label for="kategoriSurat" class="form-label">Kategori Surat</label>
                    <input type="text" class="form-control" id="kategoriSurat" name="kategoriSurat" value="<?= old('kategoriSurat'); ?>">
                </div> -->
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat1" value="Rahasia" <?= old('perihalSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat1" value="Rahasia">
                            Rahasia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat1" value="Biasa" <?= old('perihalSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat1" value="Biasa">
                            Biasa
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="fileSurat" class="form-label">File Surat</label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" value="<?= old('fileSurat'); ?>">
                </div>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>