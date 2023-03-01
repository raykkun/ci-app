<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card mt-3">
                <div class="card-header">
                    Form Ubah Handphone 
                </div>

                <div class="card-body">

                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $handphone['id']; ?>">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" name="merk" id="merk" autocomplete="off" value="<?= $handphone['merk']; ?>">
                            <div class="form-text text-danger"><?= form_error('merk'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" autocomplete="off" value="<?= $handphone['harga']; ?>">
                            <div class="form-text text-danger"><?= form_error('harga'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="buatan">Buatan</label>
                            <input type="text" class="form-control" name="buatan" id="Buatan" autocomplete="off" value="<?= $handphone['buatan']; ?>">
                            <div class="form-text text-danger"><?= form_error('buatan'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <select class="form-select" name="stok" id="stok">
                                <?php foreach( $stok as $s ): ?>
                                    <?php if( $s == $handphone['stok']): ?>
                                        <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                    <?php else: ?>
                                        <option value="<?= $s; ?>" ><?= $s; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Tambah Ubah</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>