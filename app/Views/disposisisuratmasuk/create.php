<?= $this->extend('layout/templateKepalaSekolah'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Disposisi Surat Masuk</h2>

            <form action="/disposisisuratmasuk/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="nomorSurat" class="form-label ">Nomor Surat</label>
                    <input type="teks" class="form-control" id="nomorSurat" name="nomorSurat" autofocus value="<?= old('nomorSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= old('tanggalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label">Perihal Surat</label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= old('perihalSurat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="asalSurat" class="form-label">Asal Surat</label>
                    <input type="text" class="form-control" id="asalSurat" name="asalSurat" value="<?= old('asalSurat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaDisposisi" class="form-label">Penerima Disposisi</label>
                    <input type="text" class="form-control" id="penerimaDisposisi" name="penerimaDisposisi" value="<?= old('penerimaDisposisi'); ?>">
                </div>
                <div class="mb-3">
                    <label for="sifatSurat" class="form-label">Sifat Surat</label>
                    <input type="text" class="form-control" id="sifatSurat" name="sifatSurat" value="<?= old('sifatSurat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="isiDisposisi" class="form-label">Isi Disposisi</label>
                    <input type="text" class="form-control" id="isiDisposisi" name="isiDisposisi" value="<?= old('isiDisposisi'); ?>">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <input type="text" class="form-control" id="catatan" name="catatan" value="<?= old('catatan'); ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaPengembalian" class="form-label">Penerima Pengembalian</label>
                    <input type="text" class="form-control" id="penerimaPengembalian" name="penerimaPengembalian" value="<?= old('penerimaPengembalian'); ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian" value="<?= old('tanggalPengembalian'); ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>