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
                    <label for="nomorSurat" class="form-label "><b>Nomor Surat</b></label>
                    <input type="teks" class="form-control " id="nomorSurat" name="nomorSurat" autofocus value="<?= (old('nomorSurat')) ? old('nomorSurat') : $disposisisuratmasuk['nomorSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label "><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control " id="tanggalSurat" name="tanggalSurat" autofocus value="<?= (old('tanggalSurat')) ? old('tanggalSurat') : $disposisisuratmasuk['tanggalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="perihalSurat" class="form-label "><b>Perihal Surat</b></label>
                    <input type="teks" class="form-control " id="perihalSurat" name="perihalSurat" autofocus value="<?= (old('perihalSurat')) ? old('perihalSurat') : $disposisisuratmasuk['perihalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="asalSurat" class="form-label "><b>Asal Surat</b></label>
                    <input type="teks" class="form-control " id="asalSurat" name="asalSurat" autofocus value="<?= (old('asalSurat')) ? old('asalSurat') : $disposisisuratmasuk['asalSurat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaDisposisi" class="form-label "><b>Penerima Disposisi</b></label>
                    <input type="teks" class="form-control " id="penerimaDisposisi" name="penerimaDisposisi" autofocus value="<?= (old('penerimaDisposisi')) ? old('penerimaDisposisi') : $disposisisuratmasuk['penerimaDisposisi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="sifatSurat" class="form-label "><b>Sifat Surat</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat1" value="Penting" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat1" value="Penting">
                            Penting
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat2" value="Rahasia" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat2" value="Rahasia">
                            Rahasia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat3" value="Pribadi" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat3" value="Pribadi">
                            Pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" id="sifatSurat3" value="Biasa" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat4" value="Biasa">
                            Biasa
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isiDisposisi" class="form-label "><b>Isi Disposisi</b></label>
                    <input type="teks" class="form-control " id="isiDisposisi" name="isiDisposisi" autofocus value="<?= (old('isiDisposisi')) ? old('isiDisposisi') : $disposisisuratmasuk['isiDisposisi'] ?>">
                    <div class="isi">
                        <table class="isi">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50%;">Isi Berdasarkan Petunjuk Dibawah</th>
                                    <th scope="col" style="width: 50%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="width: 50%;">
                                    <td scope="row">1. Simpan atau Arsip</th>
                                    <td scope="row">6. Tunggu</th>
                                </tr>
                                <tr style="width: 50%;">
                                    <td scope="row">2. Hadiri</th>
                                    <td scope="row">7. Mohon Persetujuan</th>
                                </tr>
                                <tr style="width: 50%;">
                                    <td scope="row">3. Laporkan</th>
                                    <td scope="row">8. Sudah Ditandatangani</th>
                                </tr>
                                <tr style="width: 50%;">
                                    <td scope="row">4. Mohon Tanda Tangan</th>
                                    <td scope="row">9. Untuk Perhatian</th>
                                </tr>
                                <tr style="width: 50%;">
                                    <td scope="row">5. Edarkan/Kirimkan</th>
                                    <td scope="row">10. Siapakan Laporan</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label "><b>Catatan</b></label>
                    <input type="teks" class="form-control " id="catatan" name="catatan" autofocus value="<?= (old('catatan')) ? old('catatan') : $disposisisuratmasuk['catatan'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerimaPengembalian" class="form-label "><b>Penerima Pengembalian</b></label>
                    <input type="teks" class="form-control " id="penerimaPengembalian" name="penerimaPengembalian" autofocus value="<?= (old('penerimaPengembalian')) ? old('penerimaPengembalian') : $disposisisuratmasuk['penerimaPengembalian'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggalPengembalian" class="form-label "><b>Tanggal Pengembalian</b></label>
                    <input type="date" class="form-control " id="tanggalPengembalian" name="tanggalPengembalian" autofocus value="<?= (old('tanggalPengembalian')) ? old('tanggalPengembalian') : $disposisisuratmasuk['tanggalPengembalian'] ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>