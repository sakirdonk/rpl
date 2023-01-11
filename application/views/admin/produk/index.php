<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Produk</li>
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
                <h3 class="card-title">Kelola Daftar Produk</h3>

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
                <a class="btn btn-success" href="<?= base_url('index.php/admin/produk/create') ?>" role="button">Tambahkan Produk</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_produk as $produk) { 
                        ?>
                        <tr style="text-align: center;">
                            <td><?= $produk->id ?></td>
                            <td><?= $produk->kode?></td>
                            <td><?= $produk->nama_produk?></td>
                            <td><?= $produk->stock?></td>
                            <td><?= $produk->harga?></td>
                            <td><?= $produk->deskripsi?></td>
                            <td>
                                <a class='btn btn-success' href="<?= base_url('index.php/admin/produk/view?id=').$produk->id ?>">View</a>
                                <a class='btn btn-primary' href="<?= base_url('index.php/admin/produk/edit?id=').$produk->id ?>">Edit</a>
                                <a class='btn btn-danger' href="<?= base_url('index.php/admin/produk/delete?id=').$produk->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Produk <?= $produk->nama_produk ?>')) {return false}">Delete</a>
                            </td>
                        </tr>
                        <?php
                        } 
                        ?>
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