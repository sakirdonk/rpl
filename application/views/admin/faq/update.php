<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar FAQs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/faq') ?>">FAQs</a></li>
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
                <h3 class="card-title">Tambahakan FAQs</h3>

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
                <a class='btn btn-success mb-3' href="<?= base_url('index.php/admin/faq/index') ?>">Kembali</a>
                <?php
                $hidden = ['id' => $list_faq->id];
                echo form_open(base_url('index.php/admin/faq/save'), '', $hidden);
                ?>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="nama_faskes">Pertanyaan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fas fa-building"></i>
                                </div>
                            </div>
                            <input id="pertanyaan" name="pertanyaan" type="text" class="form-control" required="required" value="<?= $list_faq->pertanyaan ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-4 col-form-label">Jawaban</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-map-marker"></i>
                                </div>
                            </div>
                            <input id="jawaban" name="jawaban" type="text" class="form-control" value="<?= $list_faq->jawaban ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>

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