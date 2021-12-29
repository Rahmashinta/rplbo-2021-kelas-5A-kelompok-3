<?= $this->extend('layout/templateKepalaSekolah'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Disposisi</h2>

            <form action="/disposisisuratmasuk/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label for="nomorSurat" class="form-label "><b>Nomor Surat</b></label>
                    <input type="teks" class="form-control" id="nomorSurat" name="nomorSurat" required autofocus value="<?= old('nomorSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="tanggalSurat" class="form-label"><b>Tanggal Surat</b></label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" required value="<?= old('tanggalSurat'); ?>">
                </div>

                <div class="mb-3">
                    <label for="perihalSurat" class="form-label"><b>Perihal </b></label>
                    <input type="text" class="form-control" id="perihalSurat" name="perihalSurat" value="<?= old('perihalSurat'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="asalSurat" class="form-label"><b>Asal Surat</b></label>
                    <input type="text" class="form-control" id="asalSurat" name="asalSurat" value="<?= old('asalSurat'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penerimaDisposisi" class="form-label"><b>Penerima </b></label>
                    <input type="text" class="form-control" id="penerimaDisposisi" name="penerimaDisposisi" value="<?= old('penerimaDisposisi'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="sifatSurat" class="form-label "><b>Sifat Surat</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" required id="sifatSurat1" value="Penting" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat">
                            <b> Penting</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" required id="sifatSurat2" value="Rahasia" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat">
                            <b>Rahasia</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" required id="sifatSurat3" value="Segera" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat">
                            <b>Segera</b>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifatSurat" required id="sifatSurat4" value="Biasa" <?= old('sifatSurat'); ?>>
                        <label class="form-check-label" for="sifatSurat">
                            <b>Biasa</b>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isiDisposisi" class="form-label"><b> Isi</b></label>
                    <input type="text" class="form-control" id="isiDisposisi" name="isiDisposisi" value="<?= old('isiDisposisi'); ?>" required>
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
                    <label for="catatan" class="form-label"><b>Catatan</b></label>
                    <input type="text" class="form-control" id="catatan" name="catatan" value="<?= old('catatan'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penerimaPengembalian" class="form-label"><b>Penerima Pengembalian</b></label>
                    <input type="text" class="form-control" id="penerimaPengembalian" name="penerimaPengembalian" value="<?= old('penerimaPengembalian'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tanggalPengembalian" class="form-label"><b>Tanggal Pengembalian</b></label>
                    <input type="date" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian" required value="<?= old('tanggalPengembalian'); ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>