<div class="container">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if( $this->session->flashdata('flash') ): ?>
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data handphone <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>

    <div class="row mt-3">

        <div class="col-md-6">
            <a href="<?= base_url();?>handphone/tambah" class="btn btn-primary">Tambah Data Handphone</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Handphone..." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <h1>Daftar Handphone</h1>
            <?php if( empty($handphone) ): ?>
                <div class="alert alert-danger" role="alert">
                Data Handphone Tidak Ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $handphone as $hp ): ?>
                    <li class="list-group-item">
                        <?= $hp['merk']; ?>
                        <a href="<?= base_url(); ?>handphone/hapus/<?= $hp['id']; ?>" class="text-decoration-none badge bg-danger float-end tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>handphone/ubah/<?= $hp['id']; ?>" class="text-decoration-none badge bg-warning float-end" >ubah</a>
                        <a href="<?= base_url(); ?>handphone/detail/<?= $hp['id']; ?>" class="text-decoration-none badge bg-primary float-end" >detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>