<?php
class Produk_model extends CI_Model
{
    private $table = 'produk';

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $sql = 'select * from produk where id=?';
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function create($data)
    {
        $sql = 'insert into produk(id, kode, nama_produk, stock, harga, deskripsi) values(default, ?, ?, ?, ?, ?)';
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        $sql = 'delete from produk where id=?';
        $this->db->query($sql, array($data));
    }

    public function update($data)
    {
        $sql = 'update produk set kode=?, nama_produk=?, stock=?, harga=?, deskripsi=? where id=?';
        $this->db->query($sql, $data);
    }

    public function uploadFoto($data)
    {
        $sql = 'update produk set foto=? where id=?';
        $this->db->query($sql,$data);
    }
}
