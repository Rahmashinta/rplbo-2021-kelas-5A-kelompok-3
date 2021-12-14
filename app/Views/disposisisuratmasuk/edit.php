<?= $this->extend('layout/templateKepalaSekolah'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Disposisi Surat Masuk</h2>
            <form action="/disposisisuratmasuk/update" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <input type="hidden" name="id" value="<?= $disposisisuratmasuk['id']; ?>">

                <div class="mb-3">
                    <label for="nomorSurat" class="form-label ">Nomor Surat</label>
                    <input type="teks" class="form-control " id="nomorSurat" name="nomorSurat" autofocus value="<?= (old('nomorSurat')) ? old('nomorSurat') : $disposisisuratmasuk['nomorSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label ">Tanggal Surat</label>
                    <input type="date" class="form-control " id="tanggalSurat" name="tanggalSurat" autofocus value="<?= (old('tanggalSurat')) ? old('tanggalSurat') : $disposisisuratmasuk['tanggalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="perihalSurat" class="form-label ">Perihal Surat</label>
                    <input type="teks" class="form-control " id="perihalSurat" name="perihalSurat" autofocus value="<?= (old('perihalSurat')) ? old('perihalSurat') : $disposisisuratmasuk['perihalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="asalSurat" class="form-label ">Asal Surat</label>
                    <input type="teks" class="form-control " id="asalSurat" name="asalSurat" autofocus value="<?= (old('asalSurat')) ? old('asalSurat') : $disposisisuratmasuk['asalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaDisposisi" class="form-label ">Penerima Disposisi</label>
                    <input type="teks" class="form-control " id="penerimaDisposisi" name="penerimaDisposisi" autofocus value="<?= (old('penerimaDisposisi')) ? old('penerimaDisposisi') : $disposisisuratmasuk['penerimaDisposisi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="sifatSurat" class="form-label ">Sifat Surat</label>
                    <input type="teks" class="form-control " id="sifatSurat" name="sifatSurat" autofocus value="<?= (old('sifatSurat')) ? old('sifatSurat') : $disposisisuratmasuk['sifatSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="isiDisposisi" class="form-label ">Isi Disposisi</label>
                    <input type="teks" class="form-control " id="isiDisposisi" name="isiDisposisi" autofocus value="<?= (old('isiDisposisi')) ? old('isiDisposisi') : $disposisisuratmasuk['isiDisposisi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label ">Catatan</label>
                    <input type="teks" class="form-control " id="catatan" name="catatan" autofocus value="<?= (old('catatan')) ? old('catatan') : $disposisisuratmasuk['catatan'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaPengembalian" class="form-label ">Penerima Pengembalian</label>
                    <input type="teks" class="form-control " id="penerimaPengembalian" name="penerimaPengembalian" autofocus value="<?= (old('penerimaPengembalian')) ? old('penerimaPengembalian') : $disposisisuratmasuk['penerimaPengembalian'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggalPengembalian" class="form-label ">Tanggal Pengembalian</label>
                    <input type="date" class="form-control " id="tanggalPengembalian" name="tanggalPengembalian" autofocus value="<?= (old('tanggalPengembalian')) ? old('tanggalPengembalian') : $disposisisuratmasuk['tanggalPengembalian'] ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>