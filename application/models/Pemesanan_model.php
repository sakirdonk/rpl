<?php
class Pemesanan_model extends CI_Model
{
    private $table = 'pemesanan';

    public function getAll()
    {
        $sql = 'select pemesanan.id, produk.nama_produk, users.username, pemesanan.alamat, pemesanan.jumlah_pemesanan, harga_kota.nama_kota, pemesanan.total_harga, pemesanan.tanggal_pemesanan from pemesanan left join produk on pemesanan.produk_id = produk.id left join users on pemesanan.user_id = users.id left join harga_kota on pemesanan.harga_kota_id = harga_kota.id';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function findById($id)
    {
        $sql = 'select pemesanan.id, produk.nama_produk, users.username, pemesanan.alamat, pemesanan.jumlah_pemesanan, harga_kota.nama_kota, pemesanan.total_harga, pemesanan.tanggal_pemesanan from pemesanan left join produk on pemesanan.produk_id = produk.id left join users on pemesanan.user_id = users.id left join harga_kota on pemesanan.harga_kota_id = harga_kota.id where pemesanan.id=?;';
        $query = $this->db->query($sql,$id);
        return $query->row();
    }
    
    public function edit($data)
    {
        $sql = 'update komentar set isi=?, nilai_rating_id=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into pemesanan(id, produk_id, user_id, alamat, jumlah_pemesanan, harga_kota_id, total_harga, tanggal_pemesanan) values(default, ?, ?, ?, ?, ?, ?, now())';
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        $sql = 'delete from komentar where id=?';
        $this->db->query($sql, array($data));
    }

}
