<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Delivery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Delivery</li>
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
                <h3 class="card-title">Kelola Delivery</h3>

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
                <a class="btn btn-success" href="<?= base_url('index.php/admin/faq/create') ?>" role="button">Tambahkan Delivery</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th style="width: 15%;">Nama Produk</th>
                            <th>Tujuan</th>
                            <th>Total Harga</th>
                            <th>Jumlah Pemesanan</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_delivery as $delivery) {
                        ?>
                            <tr>
                                <td style="text-align: center;"><?= $delivery->id ?></td>
                                <td style="text-align: center;"><?= $delivery->nama_produk ?></td>
                                <td style="text-align: center;"><?= $delivery->nama_kota ?></td>
                                <td style="text-align: center;"><?= $delivery->total_harga ?></td>
                                <td style="text-align: center;"><?= $delivery->jumlah_pesanan ?></td>
                                <td style="text-align: center;"><?= $delivery->tanggal_pemesanan ?></td>
                                <td style="width:22%; text-align: center;">
                                    <a class='btn btn-primary' href="<?= base_url('index.php/admin/faq/edit?id=') //.$faq->id 
                                                                        ?>">Edit</a>
                                    <a class='btn btn-danger' href="<?= base_url('index.php/admin/faq/delete?id=') //.$faq->id 
                                                                    ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Rumah Sakit <?php //echo $faq->nama_faq 
                                                                                                                                                                                                        ?>')) {return false}">Delete</a>
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