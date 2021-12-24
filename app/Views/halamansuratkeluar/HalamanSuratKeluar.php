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
                <form action="suratkeluar" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Surat Keluar</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword Pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>

            <div class="table">
                <table class="table table-bordered">
                    <thead style="text-align:center;">
                        <tr>
                            <th scope="col" style="width: 5%;">No</th>
                            <th scope="col" style="width: 20%;">Penerima Surat</th>
                            <th scope="col" style="width: 13%;">Nomor Surat</th>
                            <th scope="col" style="width: 13%;">Tanggal Surat</th>
                            <th scope="col" style="width: 20%;">Perihal</th>
                            <th scope="col" style="width: 13%;">Kategori Surat</th>
                            <th scope="col" style="width: 20%;">File Surat</th>
                            <th scope="col" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                        <?php foreach ($suratkeluar as $sk) : ?>
                            <tr>
                                <th scope="row" style="text-align:center;"><?= $i++; ?></th>
                                <td><?= $sk['penerimaSurat']; ?></td>
                                <td><?= $sk['nomorSurat']; ?></td>
                                <td><?= $sk['tanggalSurat']; ?></td>
                                <td><?= $sk['perihalSurat']; ?></td>
                                <td style="text-align:center;"><?= $sk['kategoriSurat']; ?></td>
                                <td><a href="/file/suratkeluar/<?= $sk['fileSurat']; ?>"><?= $sk['fileSurat']; ?></a></td>
                                <td>
                                    <div class="aksi" style="padding-bottom:5px;" style="text-align:center">
                                        <a href="/suratkeluar/edit/<?= $sk['id']; ?>" class="btn btn-warning" style="width:70px;">Edit</a>
                                    </div>

                                    <form action="/suratkeluar/delete/<?= $sk['id']; ?>" method="post" class="d-inline">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger" style="width:70px;" onclick="return confirm('apakah anda yakin?'); "> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="halaman">
                <?= $pager->links('suratkeluar', 'template_pagination'); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>