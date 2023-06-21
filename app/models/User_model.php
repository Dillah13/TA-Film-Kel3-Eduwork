<?php

class User_model {
    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // public function tambahDataUser($data)
    // {
    //     $query = "INSERT INTO tb_user (username, password, nama_lengkap, email, no_hp, alamat, foto, role)
    //                 VALUES
    //               (:username, :password, :nama_lengkap, :email, :no_hp, :alamat, :foto, :role)";
    //     $this->db->query($query);
    //     $this->db->bind('username', $data['username']);
    //     $this->db->bind('password', $data['password']);
    //     $this->db->bind('nama_lengkap', $data['nama_lengkap']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('no_hp', $data['no_hp']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->bind('foto', $data['foto']);
    //     $this->db->bind('role', $data['role']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
        
    // }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM tb_user WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // public function getUserById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
    //     $this->db->bind('id_user', $id);
    //     return $this->db->single();
    // }
}