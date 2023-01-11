<?php
class Faq_model extends CI_Model
{
    private $table = 'faq';

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $sql = 'select * from faq where id=?;';
        $query = $this->db->query($sql,$id);
        return $query->row();
    }

    public function delete($data)
    {
        $sql = 'delete from faq where id=?';
        $this->db->query($sql, array($data));
    }

    public function edit($data)
    {
        $sql = 'update komentar set isi=?, nilai_rating_id=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into faq(id, pertanyaan, jawaban) values(default, ?, ?)';
        $this->db->query($sql, $data);
    }

    public function countID()
    {
        $sql = 'select count(id) as jumlah from faq';
        $query = $this->db->query($sql);
        return $query->row();
    }
}
