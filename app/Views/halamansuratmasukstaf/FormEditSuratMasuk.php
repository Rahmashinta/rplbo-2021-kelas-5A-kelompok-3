<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Edit Surat Masuk</h2>
            <form action="/suratmasukstaf/update" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <input type="hidden" name="id" value="<?= $suratmasuk['id']; ?>">
                <input type="hidden" name="fileLama" value="<?= $suratmasuk['fileSurat']; ?>" required>

                <div class="mb-3">
                    <label for="asalSurat" class="form-label "><b>Asal Surat</b></label>
                    <input type="teks" class="form-control " id="asalSurat" name="asalSurat" autofocus value="<?= (old('asalSurat')) ? old('asalSurat') : $suratmasuk['asalSurat'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nomorSurat" class="form-label "><b>Nomor Surat </b></label>
                    <input type="teks" class="form-control " id="nomorSurat" name="nomorSurat" autofocus value="<?= (old('nomorSurat')) ? old('nomorSurat') : $suratmasuk['nomorSurat'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label"><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= (old('tanggalSurat')) ? old('tanggalSurat') : $suratmasuk['tanggalSurat'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label"><b>Perihal Surat</b></label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= (old('perihalSurat')) ? old('perihalSurat') : $suratmasuk['perihalSurat'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kategoriSurat" class="form-label "><b>Kategori Surat</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat1" value="Pribadi" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat1" value="Pribadi">
                            <b>Pribadi</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat2" value="Dinas" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat2" value="Dinas">
                            <b>Dinas</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat3" value="Niaga" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat3" value="Niaga">
                            <b> Niaga</b>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fileSurat" class="form-label"><b>File Surat</b></label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" value="<?= (old('fileSurat')) ? old('fileSurat') : $suratmasuk['fileSurat'] ?>" required>
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>