<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card mt-3">
                <div class="card-header">
                    Form Tambah Handphone 
                </div>

                <div class="card-body">

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" name="merk" id="merk" autocomplete="off">
                            <div class="form-text text-danger"><?= form_error('merk'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" autocomplete="off">
                            <div class="form-text text-danger"><?= form_error('harga'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="buatan">Buatan</label>
                            <input type="text" class="form-control" name="buatan" id="Buatan" autocomplete="off">
                            <div class="form-text text-danger"><?= form_error('buatan'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <select class="form-select" name="stok" id="stok">
                                <option value="tersedia">Tersedia</option>
                                <option value="habis">Habis</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Tambah Data</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>