<?= $this->extend('layout/templatestaftatausaha'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="cari" style="padding-top: 25px;">
                <form action="suratmasukstaf/cari" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Surat Masuk</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword Pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">


                <div class="table">
                    <table class="table" style="text-align: center;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" style="width: 250px;">Asal Surat</th>
                                <th scope="col" style="width: 120px;">Tanggal Surat</th>
                                <th scope="col" style="width: 250px;">Perihal</th>
                                <th scope="col" style="width: 130px;">Kategori Surat</th>
                                <th scope="col" style="width: 210px;">File Surat</th>
                                <th scope="col" style="width: 80px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:left;">
                            <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                            <?php foreach ($suratmasuk as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $sm['asalSurat']; ?></td>
                                    <td><?= $sm['tanggalSurat']; ?></td>
                                    <td><?= $sm['perihalSurat']; ?></td>
                                    <td><?= $sm['kategoriSurat']; ?></td>
                                    <td><?= $sm['fileSurat']; ?></td>
                                    <td>
                                        <div class="aksi" style="padding-bottom:5px;">
                                            <a href="/suratmasukstaf/edit/<?= $sm['id']; ?>" class="btn btn-warning" style="width:70px;">Edit</a>
                                        </div>

                                        <form action="/suratmasukstaf/delete/<?= $sm['id']; ?>" method="post" class="d-inline">
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

                <div class="halaman">
                    <?= $pager->links('suratmasuk', 'template_pagination'); ?>
                </div>

            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>