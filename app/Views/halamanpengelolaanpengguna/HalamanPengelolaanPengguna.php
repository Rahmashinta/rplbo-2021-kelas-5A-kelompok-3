<?= $this->extend('layout/templateKepalaTataUsaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/pengguna/create" class="btn btn-primary mt-3 mb-2">Tambah Data Pengguna</a>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="cari" style="padding-top: 15px;">
                <form action="pengguna/cari" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Pengguna</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword Pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>

            <div class="table">
                <table class="table" style="text-align:center;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" style="width: 250px;">Username</th>
                            <th scope="col" style="width: 120px;">Password</th>
                            <th scope="col" style="width: 250px;">Nama</th>
                            <th scope="col" style="width: 130px;">Level Akses</th>
                            <th scope="col" style="width: 80px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:left;">
                        <?php $i = 1; ?>
                        <?php foreach ($pengguna as $pg) : ?>
                            <tr>
                                <th scope="row" style="text-align:center;"><?= $i++; ?></th>
                                <td><?= $pg['username']; ?></td>
                                <td><?= $pg['password']; ?></td>
                                <td><?= $pg['nama']; ?></td>
                                <td><?= $pg['levelakses']; ?></td>
                                <td>
                                    <div class="aksi" style="padding-bottom:5px;" style="text-align:center">
                                        <a href="/pengguna/edit/<?= $pg['id']; ?>" class="btn btn-warning" style="width:70px;">Edit</a>
                                    </div>

                                    <form action="/pengguna/delete/<?= $pg['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>

                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger" style="width:70px;" onclick="return confirm('apakah anda yakin?'); "> Delete</button>
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