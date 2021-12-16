<?= $this->extend('layout/templateStafTataUsaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/suratkeluar/create" class="btn btn-primary mt-3 mb-2">Tambah Surat Keluar</a>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="cari" style="padding-top: 15px;">
                <form action="suratkeluar/cari" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Surat Keluar</h2>
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
                            <th scope="col" style="width: 250px;">Penerima Surat</th>
                            <th scope="col" style="width: 120px;">Tanggal Surat</th>
                            <th scope="col" style="width: 250px;">Perihal</th>
                            <th scope="col" style="width: 130px;">Kategori Surat</th>
                            <th scope="col" style="width: 210px;">File Surat</th>
                            <th scope="col" style="width: 80px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:left;">
                        <?php $i = 1; ?>
                        <?php foreach ($suratkeluar as $sk) : ?>
                            <tr>
                                <th scope="row" style="text-align:center;"><?= $i++; ?></th>
                                <td><?= $sk['penerimaSurat']; ?></td>
                                <td><?= $sk['tanggalSurat']; ?></td>
                                <td><?= $sk['perihalSurat']; ?></td>
                                <td><?= $sk['kategoriSurat']; ?></td>
                                <td><?= $sk['fileSurat']; ?></td>
                                <td>
                                    <div class="aksi" style="padding-bottom:5px;" style="text-align:center">
                                        <a href="/suratkeluar/edit/<?= $sk['id']; ?>" class="btn btn-warning" style="width:70px;">Edit</a>
                                    </div>

                                    <form action="/suratkeluar/delete/<?= $sk['id']; ?>" method="post" class="d-inline">
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