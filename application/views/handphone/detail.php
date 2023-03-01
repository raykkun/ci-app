<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Handphone
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $handphone['merk']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Harga : Rp.<?= $handphone['harga']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Buatan : <?= $handphone['buatan']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Stok : <?= $handphone['stok']; ?></h6>
                    <a href="<?= base_url(); ?>handphone" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>