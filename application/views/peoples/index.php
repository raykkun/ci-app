<div class="container">
    <h3 class="mt-3">List Of Peoples</h3>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Search Keyword.." autocomplete="off" autofocus>
                    <input class="btn btn-primary" name="submit" type="submit">
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if( empty($peoples) ): ?>
                        <tr>
                            <td class="col-md-9">
                                <div class="alert alert-danger" role="alert">
                                    Data Tidak Ditemukan !!!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach( $peoples as $people) : ?>
                    <tr>
                        <th><?= ++$start; ?></th>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="" class="badge bg-warning text-decoration-none">detail</a>
                            <a href="" class="badge bg-success text-decoration-none">edit</a>
                            <a href="" class="badge bg-danger text-decoration-none ">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>