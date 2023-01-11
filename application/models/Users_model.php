<?php
class Users_model extends CI_Model
{
    private $table = 'users';

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function delete($data)
    {
        $sql = 'delete from users where id=?';
        $this->db->query($sql, array($data));
    }

    public function update($data)
    {
        $sql = 'update users set username=?, password=MD5(?), email=?, role=?, nohp=?, membership=? where id=?';
        $this->db->query($sql, $data);
    }

    public function create($data)
    {
        $sql = 'insert into users(id, username, password, email, role, nohp, membership) values(default, ?, MD5(?), ?, ?, ?, ?)';
        $this->db->query($sql, $data);
    }

    public function countID()
    {
        $sql = 'select count(id) as jumlah from users';
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function findById($id)
    {
        $sql = 'select * from users where id=?';
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function login($user, $pass)
    {
        $sql = 'select id, username, password, email, role, nohp, membership, foto from users where email=? and password=MD5(?)';
        $data = [$user, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}
