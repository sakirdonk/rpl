<?php
if (!$this->session->has_userdata('USERNAME')) {
    redirect(base_url() . 'index.php/login');
}
if ($this->session->userdata('ROLE') == 'public') {
    redirect(base_url() . 'index.php/dashboard');
}
?>
<div class="container">
    <div class="row justify-content-between mb-5">
        <div class="col-6 mt-4">
            <?php
            $hidden = ['user_id' => $this->session->userdata('ID')];
            echo form_open(base_url('index.php/dashboard/save'), '', $hidden);
            ?>
            <div>
                <h4>Alamat Pengiriman</h4>
                <textarea name="alamat" id="alamat" cols="30" rows="3" style="width: 100%;" placeholder="Alamat Pengiriman"></textarea>
                <span>Kota Tujuan</span>
                <select name="kota" id="kota" onchange="harga_ongkir(), total_semua()">
                    <option value="" disabled>--Hanya Sekitar Pulau Jawa--</option>
                    <?php
                    foreach ($list_harga_kota as $harga_kota) {
                    ?>
                        <option value="<?= $harga_kota->harga ?>|<?= $harga_kota->id ?>"><?= $harga_kota->nama_kota ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <h4>Jumlah Pemesanan</h4>
                <div class="row">
                    <div class="col-5">
                        <img style="width: 100%;" src="<?= base_url('assets/img/produk/') . $list_produk->foto ?>" alt="Foto Produk" />
                    </div>
                    <div class="col-7">
                        <div>
                            <h4><?= $list_produk->nama_produk ?></h4>
                            <input type="text" id="produk_id" name="produk_id" value="<?= $list_produk->id ?>" hidden>
                        </div>
                        <div>
                            <span style="color: orange;">Rp <?= $list_produk->harga ?></span>
                            <input type="text" id="harga_produk" name="harga_produk" value="<?= $list_produk->harga ?>" hidden>
                        </div>
                        <div>
                            Jumlah Pemesanan:
                            <input type="number" id="jumlah_pemesanan" name="jumlah_pemesanan" onchange="total_price(), total_semua()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="mt-4" style="border: 1px solid black">
                <h4>Ringkasan Belanja</h4>
                <div style="border: 1px black solid">
                    <table class="mb-5">
                        <tr>
                            <td>Total Harga</td>
                            <td>
                                <span id="total_harga"></span>
                                <script>
                                    function total_price() {
                                        var $harga_produk = <?= $list_produk->harga ?>;
                                        var $total_price = document.getElementById('jumlah_pemesanan').value;
                                        var $total_pemesanan = $harga_produk * $total_price;
                                        document.getElementById('total_harga').innerHTML = $total_pemesanan;
                                    }
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya Pengiriman</td>
                            <td>
                                <span id="ongkir"></span>
                                <script>
                                    function harga_ongkir() {
                                        var $kasar = document.getElementById('kota').value;
                                        var $total_ongkir = $kasar.split("|");
                                        document.getElementById('ongkir').innerHTML = $total_ongkir[0];
                                    }
                                </script>
                            </td>
                        </tr>
                    </table>
                    <p>Dengan Menyetujui Persyaratan</p>
                    <hr>
                    <table class="mb-2">
                        <tr>
                            <td>
                                Total Tagihan
                            </td>
                            <td>
                                <span id="total_biaya" name="total_biaya"></span>
                                <script>
                                    function total_semua() {
                                        var $harga_produk = <?= $list_produk->harga ?>;
                                        var $total_price = document.getElementById('jumlah_pemesanan').value;
                                        var $total_pemesanan = $harga_produk * $total_price;

                                        var $kasar = document.getElementById('kota').value;
                                        var $total_ongkir = $kasar.split("|");
                                        var $total_biaya = $total_pemesanan + parseInt($total_ongkir[0]);
                                        document.getElementById('total_biaya').innerHTML = parseInt($total_biaya);
                                    }
                                </script>
                            </td>
                        </tr>
                    </table>
                    <button>Submit</button>
                </div>
            </div>
            <?php form_close(); ?>
        </div>
    </div>
</div>