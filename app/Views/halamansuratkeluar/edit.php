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
                    <label for="penerimaSurat" class="form-label ">Asal Surat</label>
                    <input type="teks" class="form-control " id="penerimaSurat" name="penerimaSurat" autofocus value="<?= (old('penerimaSurat')) ? old('penerimaSurat') : $suratkeluar['penerimaSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= (old('tanggalSurat')) ? old('tanggalSurat') : $suratkeluar['tanggalSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label">Perihal Surat</label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= (old('perihalSurat')) ? old('perihalSurat') : $suratkeluar['perihalSurat'] ?>">
                </div>

                <div class="mb-3">
                    <label for="kategoriSurat" class="form-label">Kategori Surat</label>
                    <input type="text" class="form-control" id="kategoriSurat" name="kategoriSurat" value="<?= (old('kategoriSurat')) ? old('kategoriSurat') : $suratkeluar['kategoriSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="fileSurat" class="form-label">File Surat</label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" value="<?= (old('fileSurat')) ? old('fileSurat') : $suratkeluar['fileSurat'] ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>