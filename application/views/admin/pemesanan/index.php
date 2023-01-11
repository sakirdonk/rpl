<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Pemesanan</li>
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
                <h3 class="card-title">Kelola Pemesanan</h3>

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
                <a class="btn btn-success" href="<?= base_url('index.php/admin/orderlist/create') ?>" role="button">Tambahkan Pemesanan</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th style="width: 15%;">Nama Pelanggan</th>
                            <th>Alamat Pengiriman</th>
                            <th>Jumlah Pengiriman</th>
                            <th>Kota Tujuan</th>
                            <th>Total Harga</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_pemesanan as $pemesanan) {
                        ?>
                            <tr>
                                <td><?= $pemesanan->id ?></td>
                                <td><?= $pemesanan->nama_produk ?></td>
                                <td><?= $pemesanan->username ?></td>
                                <td style="text-align: center;"><?= $pemesanan->alamat ?></td>
                                <td style="text-align: center;"><?= $pemesanan->jumlah_pemesanan ?></td>
                                <td style="text-align: center;"><?= $pemesanan->nama_kota ?></td>
                                <td style="text-align: center;"><?= $pemesanan->total_harga ?></td>
                                <td style="text-align: center;"><?= $pemesanan->tanggal_pemesanan ?></td>
                                <td style="width:22%;">
                                    <a class='btn btn-success' href="<?= base_url('index.php/admin/orderlist/view?id=') .$pemesanan->id ?>">View</a>
                                    <a class='btn btn-primary' href="<?= base_url('index.php/admin/orderlist/edit?id=') .$pemesanan->id ?>">Edit</a>
                                    <a class='btn btn-danger' href="<?= base_url('index.php/admin/orderlist/delete?id=') .$pemesanan->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Pemesanan?')">Delete</a>
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