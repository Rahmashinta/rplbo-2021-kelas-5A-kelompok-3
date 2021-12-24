<?= $this->extend('layout/templateResepsionis'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/suratlegalisirresepsionis/create" class="btn btn-primary mt-3">Tambah Surat Legalisir</a>

            <h1 class="mt-2">Daftar Surat Legalisir</h1>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <table class="table table-bordered">
                <thead style="text-align:center;">
                    <tr>
                        <th scope="col" style="width:5%">No</th>
                        <th scope="col" style="width:30%">Nama Siswa</th>
                        <th scope="col" style="width:10%">Kelas</th>
                        <th scope="col" style="width:10%">Tahun Ajaran</th>
                        <th scope="col" style="width:40%">File Surat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (8 * ($currentPage - 1)); ?>
                    <?php foreach ($suratlegalisir as $sl) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $sl['nama']; ?></td>
                            <td><?= $sl['kelas']; ?></td>
                            <td><?= $sl['tahunAjaran']; ?></td>
                            <td><?= $sl['fileSurat']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div class="halaman">
            <?= $pager->links('suratlegalisir', 'template_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>