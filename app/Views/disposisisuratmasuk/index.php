<?= $this->extend('layout/templateKepalaSekolah'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/disposisisuratmasuk/create" class="btn btn-primary mt-3">Tambah Disposisi Surat Masuk</a>

            <h1 class="mt-2">Daftar Disposisi Surat Masuk</h1>

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
                        <?php $i = 1; ?>
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

    </div>
</div>

<?= $this->endSection(); ?>