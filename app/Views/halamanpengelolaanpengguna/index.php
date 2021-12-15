<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/suratmasuk/create" class="btn btn-primary mt-3">Tambah Surat Masuk</a>

            <h1 class="mt-2">Daftar Surat Masuk</h1>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asal Surat</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Perihal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($suratmasuk as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $sm['asalSurat']; ?></td>
                            <td><?= $sm['tanggalSurat']; ?></td>
                            <td><?= $sm['perihalSurat']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>