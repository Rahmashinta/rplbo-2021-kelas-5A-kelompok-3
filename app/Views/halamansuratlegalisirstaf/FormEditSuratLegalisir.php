<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Surat Legalisir</h2>
            <form action="/suratlegalisirstaf/update" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <input type="hidden" name="id" value="<?= $suratlegalisir['id']; ?>">

                <input type="hidden" name="fileLama" value="<?= $suratlegalisir['fileSurat']; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label ">Nama</label>
                    <input type="teks" class="form-control " id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $suratlegalisir['nama'] ?>">
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="teks" class="form-control" id="kelas" name="kelas" value="<?= (old('kelas')) ? old('kelas') : $suratlegalisir['kelas'] ?>">
                </div>

                <div class="mb-3">
                    <label for="tahunAjaran" class="form-label">Tahun Ajaran</label>
                    <input type="text" class="form-control" id="tahunAjaran" name="tahunAjaran" value="<?= (old('tahunAjaran')) ? old('tahunAjaran') : $suratlegalisir['tahunAjaran'] ?>">
                </div>
                <div class="mb-3">
                    <label for="fileSurat" class="form-label">File Surat</label>
                    <input type="file" class="form-control" id="fileSurat" name="fileSurat" value="<?= (old('fileSurat')) ? old('fileSurat') : $suratlegalisir['fileSurat'] ?>">
                </div>

                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>