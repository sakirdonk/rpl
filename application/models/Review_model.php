<?php
class Review_model extends CI_Model
{
    private $table = 'review';

    public function getAll()
    {
        $sql = 'select review.id, produk.nama_produk, review.text, review.rating from review left join produk on review.produk_id=produk.id;';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update($data)
    {
        $sql = 'update review set username=?, password=MD5(?), email=?, role=?, nohp=?, membership=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into review(id, username, password, email, role, nohp, membership) values(?, ?, MD5(?), ?, ?, ?, ?)';
        $this->db->query($sql, $data);
    }

    public function countID()
    {
        $sql = 'select count(id) as jumlah from review';
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function findById($id)
    {
        $sql = 'select * from review where id=?';
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function ratingProduk($id)
    {
        $sql = 'select review.id, users.username, produk.id, review.text, review.rating, users.foto from review left join users on review.user_id = users.id left join produk on review.produk_id = produk.id where produk_id=?';
        $query = $this->db->query($sql, $id);
        return $query->result();
    }

    public function rateRating($id)
    {
        $sql = 'select count(rating) as total_review, format(avg(rating),2) as rata from review where produk_id=?';
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function delete($data)
    {
        $sql = 'delete from review where id=?';
        $this->db->query($sql, array($data));
    }
}
