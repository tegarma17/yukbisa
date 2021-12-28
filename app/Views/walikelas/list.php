<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Data Wali Kelas</h1>
        <div class="section-header-button">
            <a href="<?= base_url('walikelas/add') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>
    <?php if (session()->get('message')) : ?>
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Mata Pelajaran Berhasil Ditambahkan<strong><?= session()->getFlashdata('message'); ?></strong>
    </div> -->
    <?php endif; ?>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Set Kelas / Data Wali Kelas</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($walikelas as $key => $value) : ?>
                            <tr>
                                <td><?= $value->nama_guru ?></td>
                                <td><?= $value->nama_kelas ?></td>
                                <td><a href="<?= base_url('walikelas/edit/' . $value->id) ?>" class="btn btn-primary btn-sm"></i>LIHAT</a>
                                    <a href="<?= base_url('walikelas/hapus/' . $value->id) ?>" class="btn btn-danger btn-sm"></i>Delete</a>
                                </td>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>