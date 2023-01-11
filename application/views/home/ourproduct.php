<div class="container">
    <div class="row d-flex align-items-start justify-content-center">
        <?php
        foreach($list_produk as $produk){
        ?>
            <div class="col-3 mt-2 mb-2">
                <div class="card" style="padding: 6%;">
                    <img alt="Bootstrap Thumbnail First" src="<?= base_url('/assets/img/produk/').$produk->foto?>" />
                    <div class="card-block">
                        <div style="height: 50px; margin-top: 4%">
                        <h5 class="card-title">
                            <?= $produk->nama_produk?>
                        </h5>
                        </div>
                        <div style="height: 70px; margin-top: 4%">
                        <p class="card-text">
                            <?= $produk->deskripsi?>
                        </p>
                        </div>
                        <div style="height: 50px; margin-top: 4%">
                            <a class="btn btn-primary" style="width: 100%; color:white; background-color:orange;" href="<?= base_url('index.php/dashboard/order?id=').$produk->id?>">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>