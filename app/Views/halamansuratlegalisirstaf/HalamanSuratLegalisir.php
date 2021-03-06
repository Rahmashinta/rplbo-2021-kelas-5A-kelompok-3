z<?= $this->extend('layout/templateStafTataUsaha'); ?>

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
                <form action="suratlegalisirstaf" method="post">
                    <div class="input-group mb-3">
                        <h2 style="padding-right: 530px;">Daftar Surat Legalisir</h2>
                        <input type="text" class="form-control" placeholder="Masukkan Keyword" name="keyword">
                        <button class="btn btn-outline-secondary btn-warning" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>

            <div class="table ">
                <table class="table table-bordered ">
                    <thead style="text-align:center;">
                        <tr>
                            <th scope="col" style="width: 5%">No</th>
                            <th scope="col" style="width: 30%">Nama Siswa</th>
                            <th scope="col" style="width: 10%">Kelas</th>
                            <th scope="col" style="width: 15%">Tahun Ajaran</th>
                            <th scope="col" style="width: 30%">File Surat</th>
                            <th scope="col" style="width: 10%">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                        <?php foreach ($suratlegalisir as $sl) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $sl['nama']; ?></td>
                                <td><?= $sl['kelas']; ?></td>
                                <td><?= $sl['tahunAjaran']; ?></td>
                                <td><a href="/file/suratlegalisir/<?= $sl['fileSurat']; ?>"><?= $sl['fileSurat']; ?></td>
                                <td>
                                    <div class="aksi" style="padding-bottom:5px; text-align:center">
                                        <a href="/suratlegalisirstaf/edit/<?= $sl['id']; ?>" class="btn btn-warning" style="width:70px">Edit</a>
                                    </div>

                                    <form action="/suratlegalisirstaf/delete/<?= $sl['id']; ?>" method="post" class="d-inline" style="margin-left: 12px;">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger" style=" width:70px; " onclick="return confirm('apakah anda yakin?'); "> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="halaman">
                <?= $pager->links('suratlegalisir', 'template_pagination'); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>