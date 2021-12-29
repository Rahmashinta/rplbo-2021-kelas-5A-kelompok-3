<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Surat Keluar</h2>

            <form action="/suratkeluar/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="penerimaSurat" class="form-label "><b>Penerima Surat</b></label>
                    <input type="text" class="form-control" id="penerimaSurat" name="penerimaSurat" required autofocus value="<?= old('penerimaSurat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="nomorSurat" class="form-label "><b>Nomor Surat</b></label>
                    <input type="text" class="form-control" id="nomorSurat" name="nomorSurat" required autofocus value="<?= old('nomorSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label"><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" required value="<?= old('tanggalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label"><b>Perihal Surat</b></label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" required value="<?= old('perihalSurat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="kategoriSurat" class="form-label "><b>Kategori Surat</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" required id="kategoriSurat1" value="Pribadi" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat">
                            <b>Pribadi</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" required id="kategoriSurat2" value="Dinas" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat">
                            <b>Dinas</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" required id="kategoriSurat3" value="Niaga" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat">
                            <b>Niaga</b>
                        </label>
                    </div>
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