<?php

class Sutradara_model
{
    private $table = 'tb_sutradara';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSutradara()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getSutradaraById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_sutradara=:id_sutradara');
        $this->db->bind('id_sutradara', $id);
        return $this->db->single();
    }
    public function tambahDataSutradara($data)
    {
        $query = "INSERT INTO tb_sutradara (nama_sutradara)
                    VALUES
                  (:nama_sutradara)";
        $this->db->query($query);
        $this->db->bind('nama_sutradara', $data['nama_sutradara']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataSutradara($id)
    {
        $query = "DELETE FROM tb_sutradara WHERE id_sutradara = :id_sutradara";
        $this->db->query($query);
        $this->db->bind('id_sutradara', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataSutradara($data)
    {
        $query = "UPDATE tb_sutradara SET
                    nama_sutradara = :nama_sutradara
                  WHERE id_sutradara = :id_sutradara";
        $this->db->query($query);
        $this->db->bind('nama_sutradara', $data['nama_sutradara']);
        $this->db->bind('id_sutradara', $data['id_sutradara']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}