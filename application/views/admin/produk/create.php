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
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Produk</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-title">Tambahkan Produk</h3>

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
                <a class='btn btn-success mb-3' href="<?= base_url('index.php/admin/produk') ?>">Kembali</a>
                <?php echo form_open(base_url('index.php/admin/produk/save'));
                ?>
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">Kode Produk</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <input id="kode" name="kode" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label">Nama Produk</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <input id="nama_produk" name="nama_produk" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Stock</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="stock" name="stock" type="text" required="required" class="form-control" default="0">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label">Harga</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-id-card"></i>
                                </div>
                            </div>
                            <input id="harga" name="harga" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label">Deskripsi</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <input id="deskripsi" name="deskripsi" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <?php form_close(); ?>
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