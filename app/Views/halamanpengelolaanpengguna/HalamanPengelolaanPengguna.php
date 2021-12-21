<?= $this->extend('layout/templateKepalaTataUsaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/pengguna/create" class="btn btn-primary mt-3">Tambah Data Pengguna</a>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="cari" style="padding-top: 5px;">
                <form action="pengguna/cari" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Pengguna</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword Pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>

            <div>
                <table class="table table-bordered" style="text-align:left; padding:0px">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 4%;">No</th>
                            <th scope="col" style="width: 20%;">Username</th>
                            <th scope="col" style="width: 20%;">Password</th>
                            <th scope="col" style="width: 20%;">Nama</th>
                            <th scope="col" style="width: 20%;">Level Akses</th>
                            <th scope="col" style="width: 5%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:left;">
                        <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                        <?php foreach ($pengguna as $pg) : ?>
                            <tr>
                                <th style="text-align:center; " scope="row"><?= $i++; ?></th>
                                <td><?= $pg['username']; ?></td>
                                <td><?= $pg['password']; ?></td>
                                <td><?= $pg['nama']; ?></td>
                                <td><?= $pg['levelakses']; ?></td>
                                <td>
                                    <div class="aksi" style="padding-bottom:5px;" style="text-align:center">
                                        <a href="/pengguna/edit/<?= $pg['id']; ?>" class="btn btn-warning" style="width:70px; font-size:15px">Edit</a>
                                    </div>

                                    <form action="/pengguna/delete/<?= $pg['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>

                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger" style="width:70px;font-size:15px" onclick="return confirm('apakah anda yakin?'); "> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <div class="halaman">
                <?= $pager->links('pengguna', 'template_pagination'); ?>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>