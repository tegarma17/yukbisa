<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Data Guru</h1>
        <div class="section-header-button">
            <a href="<?= base_url('guru/add') ?>" class="btn btn-primary">Tambah</a>
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
                <h4>Data Induk / Data Guru</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($guru as $key => $value) : ?>
                            <tr>
                                <td><?= $value->nip ?></td>
                                <td><?= $value->nama_guru ?></td>
                                <td><?= $value->alamat ?></td>
                                <td><a href="<?= base_url('guru/edit/' . $value->id) ?>" class="btn btn-primary btn-sm"></i>LIHAT</a>
                                    <a href="<?= base_url('guru/hapus/' . $value->id) ?>" class="btn btn-danger btn-sm"></i>Delete</a>
                                </td>
                                </td>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Modal Hapus -->
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Menghapus Data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url('guru/hapus/' . $value->id)  ?>" class="btn btn-primary">Yakin</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>