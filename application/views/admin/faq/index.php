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
                        <li class="breadcrumb-item"><a href="<?php //echo base_url('index.php/admin/faskes')?>">Home</a></li>
                        <li class="breadcrumb-item active">FAQs</li>
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
                <h3 class="card-title">Kelola FAQs</h3>

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
                <a class="btn btn-success" href="<?= base_url('index.php/admin/faq/create')?>" role="button">Tambahkan FAQs</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_faq as $faq) { ?>
                            <tr>
                                <td><?= $faq->id ?></td>
                                <td style="text-align: center;"><?= $faq->pertanyaan ?></td>
                                <td style="text-align: center;"><?= $faq->jawaban ?></td>
                                <td style="width:22%; text-align: center;">
                                    <a class='btn btn-primary' href="<?=base_url('index.php/admin/faq/edit?id=').$faq->id ?>">Edit</a>
                                    <a class='btn btn-danger' href="<?=base_url('index.php/admin/faq/delete?id=').$faq->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus?')">Delete</a>
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