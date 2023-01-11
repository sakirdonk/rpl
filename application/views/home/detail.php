<main class="container mb-5 pt-3">
  <div class="row">
    <div class="col-4 p-4" style="border: 1px black solid; text-align:center;">
      <div style="width:auto;">
        <img style="width: 80%;" src="<?= base_url('assets/img/produk/') . $list_produk->foto ?>" alt="..." />
      </div>
      <div class="row mt-4" style="display: flex; justify-content:center;">
        <div class="col-4" style="text-align:center;">
          <img style="width: 100%;" src="<?= base_url('assets/img/produk/') . $list_produk->foto ?>" alt="..." />
        </div>
        <div class="col-4" style="text-align:center;">
          <img style="width: 100%;" src="<?= base_url('assets/img/produk/') . $list_produk->foto ?>" alt="..." />
        </div>
        <div class="col-4" style="text-align:center;">
          <img style="width: 100%;" src="<?= base_url('assets/img/produk/') . $list_produk->foto ?>" alt="..." />
        </div>
      </div>
    </div>
    <div class="col-8" style="border: 1px black solid; padding: 1%">
      <h4><?= $list_produk->nama_produk ?></h4>
      <div class="row col-8">
        <div class="col-5">
          Star Loop <?= $avg_review->rata ?>
        </div>
        <div class="col-3" style="color: grey; font-weight:bold;">
          <?= $avg_review->total_review ?> Ulasan
        </div>
        <div class="col-3">
          <a href="<?= base_url('index.php/preview?id=') . $list_produk->id ?>" style="color: orange; font-weight:lighter; font-size:small; "><u>Lihat Semua >></u></a>
        </div>
      </div>
      <div style="color: orange; font-weight:bold; font-size:x-large;" class="mb-2">
        <?= $list_produk->harga ?>
      </div>
      <h4 class="m-0 p-0">Deskripsi</h4>
      <div class="mb-4 pb-4"><?= $list_produk->deskripsi ?></div>
      <h4 class="m-0 p-0">Review</h4>
      <?php
      foreach ($list_review as $review) {
      ?>
        <div class="row">
          <div class="col-2">
            <?php 
            if($review->foto == NULL){
              echo '<img src="' . base_url('/assets/img/user/person.png') . '" alt="foto user" style="width:100%;"/>';
            }
            else{
              echo '<img src="' . base_url('/assets/img/user/').$review->foto. '" alt="foto" style="width:100%;"/>';
            }
            ?>
          </div>
          <div class="col-6">
            <div><?= $review->username?></div>
            <div><?= $review->text ?></div>
          </div>
          <div class="col-1"><?= $review->rating ?></div>
          <div class="col-3">rating star</div>
        </div>
        <hr>
      <?php } ?>
      <div>
        <!-- redirecting into order page -->
        <a href="<?= base_url('index.php/dashboard/order?id=') . $list_produk->id ?>" class="btn btn primary" style="background-color: orange;">Buy</a>
      </div>
    </div>
  </div>
</main>