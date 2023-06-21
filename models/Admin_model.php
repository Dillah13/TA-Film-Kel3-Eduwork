<?php

class Admin_model {
    private $table = 'tb_admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdminByNickname($username)
    {
        // $username = $_SESSION['username'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }
}