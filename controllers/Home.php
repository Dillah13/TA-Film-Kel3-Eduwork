<?php

class Home extends Controller {
    public function index()
    {
        $data ['judul'] = 'Home Film';
        $data ['film'] = $this->model('Film_model')->getAllFilm();
        $data ['genre'] = $this->model('Genre_model')->getAllGenre();
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data ['judul'] = 'Detail Film';
        $data ['film'] = $this->model('Film_model')->getFilmById($id);
        $data['sutradara'] = $this->model('Sutradara_model')->getAllSutradara();
        $data ['genre'] = $this->model('Genre_model')->getAllGenre();
        $komentar = $this->model('Komentar_model')->getAllKomentar();
        $data['komentar'] = $komentar;
        $this->view('templates/header',$data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function filter($genre){
        $data ['judul'] = 'Home Film';
        $data ['film'] = $this->model('Film_model')->getFilmByGenre($genre);
        $data ['genre'] = $this->model('Genre_model')->getAllGenre();
        // jika data film kosong 
        if(empty($data['film'])){
            Flasher::setFlash('gagal', 'tidak ada film dengan genre tersebut', 'danger');
        }
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    
}