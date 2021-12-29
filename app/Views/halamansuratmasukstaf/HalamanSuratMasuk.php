<?= $this->extend('layout/templatestaftatausaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="notif" style="margin-top: 10px;">
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="cari" style="padding-top: 20px;">
                <form action="suratmasukstaf" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Surat Masuk</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword" name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">


                <div class="table">
                    <table class="table table-bordered">
                        <thead style="text-align: center;">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" style="width: 30%;">Asal Surat</th>
                                <th scope="col" style="width: 12%;">Nomor Surat</th>
                                <th scope="col" style="width: 15%;">Tanggal Surat</th>
                                <th scope="col" style="width: 20%;">Perihal Surat</th>
                                <th scope="col" style="width: 15%;">Kategori Surat</th>
                                <th scope="col" style="width: 30%;">File Surat</th>
                                <th scope="col" style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                            <?php foreach ($suratmasuk as $sm) : ?>
                                <tr>
                                    <th scope="row" style="text-align:center;"><?= $i++; ?></th>
                                    <td><?= $sm['asalSurat']; ?></td>
                                    <td><?= $sm['nomorSurat']; ?></td>
                                    <td style="text-align:center;"><?= $sm['tanggalSurat']; ?></td>
                                    <td><?= $sm['perihalSurat']; ?></td>
                                    <td><?= $sm['kategoriSurat']; ?></td>
                                    <td><a href="/file/suratmasuk/<?= $sm['fileSurat']; ?>"><?= $sm['fileSurat']; ?></td>
                                    <td>
                                        <div class="aksi" style="padding-bottom:5px;">
                                            <a href="/suratmasukstaf/edit/<?= $sm['id']; ?>" class="btn btn-warning" style="width:70px;">Edit</a>
                                        </div>

                                        <form action="/suratmasukstaf/delete/<?= $sm['id']; ?>" method="post" class="d-inline">

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
                    <?= $pager->links('suratmasuk', 'template_pagination'); ?>
                </div>

            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>