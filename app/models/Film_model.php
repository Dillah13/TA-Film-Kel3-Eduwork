<?php

class Film_model {
    private $table = 'tb_film';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFilm()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getFilmById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_film=:id_film');
        $this->db->bind('id_film', $id);
        return $this->db->single();
    }
    public function tambahDataFilm($data)
    {
        $query = "INSERT INTO tb_film (nama_film,  tahun_film, id_sutradara,id_genre, sinopsis, daftar_pemain, gambar, rating_film)
                    VALUES
                  (:nama_film,  :tahun_film, :id_sutradara, :id_genre, :sinopsis, :daftar_pemain, :gambar, :rating_film)";
        $this->db->query($query);
        $this->db->bind('nama_film', $data['nama_film']);
        $this->db->bind('tahun_film', $data['tahun_film']);
        $this->db->bind('id_genre', $data['id_genre']);
        $this->db->bind('id_sutradara', $data['id_sutradara']);
        $this->db->bind('rating_film', $data['rating_film']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->bind('daftar_pemain', $data['daftar_pemain']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataFilm($id)
    {
        $query = "DELETE FROM tb_film WHERE id_film = :id_film";
        $this->db->query($query);
        $this->db->bind('id_film', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataFilm($data)
    {
        $query = "UPDATE tb_film SET
                    nama_film = :nama_film,
                    id_sutradara = :id_sutradara,
                    tahun_film = :tahun_film,
                    id_genre = :id_genre,
                    sinopsis = :sinopsis,
                    rating_film = :rating_film,
                    daftar_pemain = :daftar_pemain,
                    gambar = :gambar
                  WHERE id_film = :id_film";
        $this->db->query($query);
        $this->db->bind('nama_film', $data['nama_film']);
        $this->db->bind('id_sutradara', $data['id_sutradara']);
        $this->db->bind('tahun_film', $data['tahun_film']);
        $this->db->bind('id_genre', $data['id_genre']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->bind('rating_film', $data['rating_film']);
        $this->db->bind('daftar_pemain', $data['daftar_pemain']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('id_film', $data['id_film']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // ubahDataFilmRating
    public function ubahDataFilmRating($rating, $id)
    {
        $query = "UPDATE tb_film SET
                    rating_film = :rating_film
                  WHERE id_film = :id_film";
        $this->db->query($query);
        $this->db->bind('rating_film', $rating);
        $this->db->bind('id_film', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getFilmByGenre($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_genre=:id_genre');
        $this->db->bind('id_genre', $id);
        return $this->db->resultSet();
    }
}
