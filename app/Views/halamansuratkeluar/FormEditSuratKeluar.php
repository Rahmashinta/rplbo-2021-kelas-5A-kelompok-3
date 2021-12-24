<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Surat Masuk</h2>
            <form action="/suratkeluar/update" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <input type="hidden" name="id" value="<?= $suratkeluar['id']; ?>">
                <input type="hidden" name="fileLama" value="<?= $suratkeluar['fileSurat']; ?>">

                <div class="mb-3">
                    <label for="penerimaSurat" class="form-label "><b>Penerima Surat</b></label>
                    <input type="text" class="form-control " id="penerimaSurat" name="penerimaSurat" autofocus value="<?= (old('penerimaSurat')) ? old('penerimaSurat') : $suratkeluar['penerimaSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="nomorSurat" class="form-label "><b>Nomor Surat</b></label>
                    <input type="text" class="form-control " id="nomorSurat" name="nomorSurat" autofocus value="<?= (old('nomorSurat')) ? old('nomorSurat') : $suratkeluar['nomorSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label"><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= (old('tanggalSurat')) ? old('tanggalSurat') : $suratkeluar['tanggalSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label"><b>Perihal Surat</b></label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= (old('perihalSurat')) ? old('perihalSurat') : $suratkeluar['perihalSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="kategoriSurat" class="form-label "><b>Kategori Surat</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat1" value="Pribadi" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat1" value="Pribadi">
                            Pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat2" value="Dinas" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat2" value="Dinas">
                            Dinas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategoriSurat" id="kategoriSurat3" value="Niaga" <?= old('kategoriSurat'); ?>>
                        <label class="form-check-label" for="kategoriSurat3" value="Niaga">
                            Niaga
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="fileSurat" class="form-label"><b>File Surat</b></label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" value="<?= (old('fileSurat')) ? old('fileSurat') : $suratkeluar['fileSurat'] ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>