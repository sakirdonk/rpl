<?php
class Delivery_model extends CI_Model
{
    private $table = 'order_item';

    public function getAll()
    {
        $sql = 'select order_item.id, produk.nama_produk, harga_kota.nama_kota, order_item.total_harga, order_item.jumlah_pesanan, order_item.tanggal_pemesanan 
        from order_item left join produk on order_item.produk_id = produk.id left join harga_kota on order_item.harga_kota_id = harga_kota.id;';

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function findById($id)
    {
        $sql = 'select komentar.id, users.username as nama_user, komentar.isi, komentar.faskes_id as faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where faskes.nama=?;';
        $query = $this->db->query($sql, $id);
        return $query->result();
    }

    public function getById($id)
    {
        $sql = 'select komentar.id, users.username as nama_user, komentar.isi, komentar.faskes_id as faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating, komentar.nilai_rating_id as id_rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where komentar.id=?;';
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function showById($id)
    {
        $sql = 'select komentar.id, users.id as user_id, users.username as nama_user, komentar.isi, komentar.faskes_id, faskes.nama as nama_faskes, 
        komentar.tanggal, nilai_rating.nama as rating from komentar left join nilai_rating on 
        komentar.nilai_rating_id = nilai_rating.id left join users on komentar.users_id = users.id left join 
        faskes on komentar.faskes_id = faskes.id where komentar.faskes_id=? order by id desc;';
        $query = $this->db->query($sql, $id);
        return $query->result();
    }

    public function delete($data)
    {
        $sql = 'delete from komentar where id=?';
        $this->db->query($sql, array($data));
    }

    public function edit($data)
    {
        $sql = 'update komentar set isi=?, nilai_rating_id=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into komentar(id, tanggal, isi, users_id, faskes_id, nilai_rating_id) values(default, now(), ?, ?, ?, ?)';
        $this->db->query($sql, $data);
    }
}
