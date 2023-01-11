<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/produk') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/user') ?>">User</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Data User</h3>

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
                <a class='btn btn-success mb-3' href="<?= base_url('index.php/admin/user') ?>">Kembali</a>
                <?php 
                $hidden = ['id' => $list_user->id];
                echo form_open(base_url('index.php/admin/user/save'), '', $hidden);
                ?>
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">Username</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <input id="username" name="username" type="text" required="required" class="form-control" value="<?=$list_user->username?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <input id="password" name="password" type="text" class="form-control" value="<?=$list_user->password?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" required="required" class="form-control" value="<?=$list_user->email?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label">Role</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-id-card"></i>
                                </div>
                            </div>
                            <select id="role" name="role" class="custom-select" required="required">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label">No. Hp</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <input id="nohp" name="nohp" type="text" class="form-control" required="required" value="<?=$list_user->nohp?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- <label for="role" class="col-4 col-form-label">Membership</label> -->
                    <div class="col-8">
                        <div class="input-group">
                            <input id="membership" value="tidak" name="membership" type="text" class="form-control" required="required" hidden>
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