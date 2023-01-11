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
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/produk')?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/produk')?>">Produk</a></li>
                        <li class="breadcrumb-item active">View</li>
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
                <h3 class="card-title">View Data Produk</h3>

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
                <a class='btn btn-success' href="<?=base_url('index.php/admin/produk')?>">Kembali</a>
                <table class="table table-striped mt-3" width="100%">
                    <tbody>
                        <tr>
                            <th style="width: 20%;">Kode Produk</th>
                            <td><?= $list_produk->kode ?></td>
                        </tr>
                        <tr>
                            <th>Nama Produk</th>
                            <td><?= $list_produk->nama_produk ?></td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td><?= $list_produk->stock ?></td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td><?= $list_produk->harga ?></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><?= $list_produk->deskripsi?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                <?php
                                    if($list_produk->foto == NULL){
                                        echo '<img src="'.base_url('/assets/img/produk/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                    }
                                    else{
                                        $filegambar = base_url('assets/img/produk/'.$list_produk->foto);
                                        echo '<img src="'.$filegambar.'" alt="foto" style="width:50%;"/>';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php 
                                    echo form_open_multipart(base_url('index.php/admin/produk/upload'));
                                ?>
                                    <input type="text" value="<?= $list_produk->id?>" name="id" hidden>
                                    <input type="file" name="foto">
                                    <input type="submit" class="btn btn-success mt-2" value="Upload">
                                <?php echo form_close()?>
                            </td>
                        </tr>
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