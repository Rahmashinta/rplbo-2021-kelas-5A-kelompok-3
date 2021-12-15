<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/suratkeluar/create" class="btn btn-primary mt-3">Tambah Surat Keluar</a>

            <h1 class="mt-2">Daftar Surat Keluar</h1>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="table">
                <table class="table" style="text-align:center;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Asal Surat</th>
                            <th scope="col">Tanggal Surat</th>
                            <th scope="col">Perihal</th>
                            <th scope="col">Kategori Surat</th>
                            <th scope="col">File Surat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($suratkeluar as $sk) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $sk['penerimaSurat']; ?></td>
                                <td><?= $sk['tanggalSurat']; ?></td>
                                <td><?= $sk['perihalSurat']; ?></td>
                                <td><?= $sk['kategoriSurat']; ?></td>
                                <td><?= $sk['fileSurat']; ?></td>
                                <td>
                                    <div class="aksi" style="padding:5px; text-align:center">
                                        <a href="/suratkeluar/edit/<?= $sk['id']; ?>" class="btn btn-warning">Edit</a>
                                    </div>

                                    <form action="/suratkeluar/delete/<?= $sk['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>

                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?'); "> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>