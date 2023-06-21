<?php

class Genre_model
{
    private $table = 'tb_genre';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGenre()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getGenreById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_genre=:id_genre');
        $this->db->bind('id_genre', $id);
        return $this->db->single();
    }
    public function tambahDataGenre($data)
    {
        $query = "INSERT INTO tb_genre (nama_genre)
                    VALUES
                  (:nama_genre)";
        $this->db->query($query);
        $this->db->bind('nama_genre', $data['nama_genre']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGenre($id)
    {
        $query = "DELETE FROM tb_genre WHERE id_genre = :id_genre";
        $this->db->query($query);
        $this->db->bind('id_genre', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataGenre($data)
    {
        $query = "UPDATE tb_genre SET
                    nama_genre = :nama_genre
                  WHERE id_genre = :id_genre";
        $this->db->query($query);
        $this->db->bind('nama_genre', $data['nama_genre']);
        $this->db->bind('id_genre', $data['id_genre']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}