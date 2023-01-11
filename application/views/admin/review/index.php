<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Review</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item active"> Review</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kelola Daftar Review</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Komentar</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_review as $review) { ?>
                            <tr style="text-align: center;">
                                <td><?= $review->id ?></td>
                                <td><?= $review->nama_produk ?></td>
                                <td><?= $review->text ?></td>
                                <td><?= $review->rating ?></td>
                                <td>
                                    <a class='btn btn-success' href="<?= base_url('index.php/admin/review/view?id=').$review->id 
                                                                        ?>">View</a>
                                    <a class='btn btn-danger' href="<?= base_url('index.php/admin/review/delete?id=').$review->id 
                                                                    ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Review Ini ?')) {return false}">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>