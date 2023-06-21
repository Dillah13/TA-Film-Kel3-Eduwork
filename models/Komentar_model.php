<?php

class Komentar_model {
    private $table = 'tb_komentar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKomentar()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataKomentar($data)
    {
        $nama_komentar = $_SESSION['nama_lengkap'];
        $tanggal = date("Y-m-d");
        $query = "INSERT INTO tb_komentar (id_film, nama_komentar, isi_komentar, rating, tanggal_komentar)
                    VALUES
                  (:id_film, :nama_komentar, :isi_komentar, :rating, :tanggal_komentar)";
        $this->db->query($query);
        $this->db->bind('id_film', $data['id_film']);
        $this->db->bind('nama_komentar', $nama_komentar);
        $this->db->bind('isi_komentar', $data['isi_komentar']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('tanggal_komentar', $tanggal);
        $this->db->execute();
        return $this->db->rowCount();
        
    }

    public function getKomentarByIdFilm($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_film=:id_film');
        $this->db->bind('id_film', $id);
        return $this->db->resultSet();
    }

    public function hapusDataKomentar($id)
    {
        $query = "DELETE FROM tb_komentar WHERE id_komentar = :id_komentar";
        $this->db->query($query);
        $this->db->bind('id_komentar', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

}