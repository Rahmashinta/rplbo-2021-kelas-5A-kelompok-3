<?= $this->extend('layout/templateKepalaSekolah'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/disposisisuratmasuk/create" class="btn btn-primary mt-3">Tambah Disposisi Surat Masuk</a>

            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="cari" style="padding-top: 15px;">
                <form action="disposisisuratmasuk/cari" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 400px;">Daftar Disposisi Surat Masuk</h2>
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
                            <th scope="col">Nomor Surat</th>
                            <th scope="col">Tanggal Surat</th>
                            <th scope="col">Perihal Surat</th>
                            <th scope="col">Asal Surat</th>
                            <th scope="col">Penerima Disposisi</th>
                            <th scope="col">Sifat Surat</th>
                            <th scope="col">Isi Disposisi</th>
                            <th scope="col">Catatan</th>
                            <th scope="col">Penerima Pengembalian</th>
                            <th scope="col">Tanggal Pengembalian</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                        <?php foreach ($disposisisuratmasuk as $dsm) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $dsm['nomorSurat']; ?></td>
                                <td><?= $dsm['tanggalSurat']; ?></td>
                                <td><?= $dsm['perihalSurat']; ?></td>
                                <td><?= $dsm['asalSurat']; ?></td>
                                <td><?= $dsm['penerimaDisposisi']; ?></td>
                                <td><?= $dsm['sifatSurat']; ?></td>
                                <td><?= $dsm['isiDisposisi']; ?></td>
                                <td><?= $dsm['catatan']; ?></td>
                                <td><?= $dsm['penerimaPengembalian']; ?></td>
                                <td><?= $dsm['tanggalPengembalian']; ?></td>
                                <td>
                                    <div class="aksi" style="padding:5px; text-align:center">
                                        <a href="/disposisisuratmasuk/edit/<?= $dsm['id']; ?>" class="btn btn-warning">Edit</a>
                                    </div>

                                    <form action="/disposisisuratmasuk/delete/<?= $dsm['id']; ?>" method="post" class="d-inline">
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
        <div class="halaman">
            <?= $pager->links('disposisisuratmasuk', 'template_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>