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
                            <th style="width: 20%;">Nama Pelanggan</th>
                            <td><?= $list_pemesanan->username ?></td>
                        </tr>
                        <tr>
                            <th>Nama Produk</th>
                            <td><?= $list_pemesanan->nama_produk ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= $list_pemesanan->alamat ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah Pemesanan</th>
                            <td><?= $list_pemesanan->jumlah_pemesanan ?></td>
                        </tr>
                        <tr>
                            <th>Tujuan Pengiriman</th>
                            <td><?= $list_pemesanan->nama_kota ?></td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td><?= $list_pemesanan->total_harga ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pemesanan</th>
                            <td><?= $list_pemesanan->tanggal_pemesanan ?></td>
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