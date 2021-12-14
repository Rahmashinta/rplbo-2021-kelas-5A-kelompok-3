<?= $this->extend('layout/templatestaftatausaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="mt-2">Daftar Surat Masuk</h1>

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
                        <?php foreach ($suratmasuk as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $sm['asalSurat']; ?></td>
                                <td><?= $sm['tanggalSurat']; ?></td>
                                <td><?= $sm['perihalSurat']; ?></td>
                                <td><?= $sm['kategoriSurat']; ?></td>
                                <td><?= $sm['fileSurat']; ?></td>
                                <td>
                                    <div class="aksi" style="padding:5px; text-align:center">
                                        <a href="/suratmasukstaf/edit/<?= $sm['id']; ?>" class="btn btn-warning">Edit</a>
                                    </div>

                                    <form action="/suratmasukstaf/delete/<?= $sm['id']; ?>" method="post" class="d-inline">
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