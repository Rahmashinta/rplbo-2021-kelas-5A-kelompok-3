<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="mt-2">Daftar Surat Legalisir</h1>

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
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">File Surat</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($suratlegalisir as $sl) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $sl['nama']; ?></td>
                                <td><?= $sl['kelas']; ?></td>
                                <td><?= $sl['tahunAjaran']; ?></td>
                                <td><?= $sl['fileSurat']; ?></td>
                                <td>
                                    <div class="aksi" style="padding:5px; text-align:center">
                                        <a href="/suratlegalisirstaf/edit/<?= $sl['id']; ?>" class="btn btn-warning">Edit</a>
                                    </div>

                                    <form action="/suratlegalisirstaf/delete/<?= $sl['id']; ?>" method="post" class="d-inline">
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