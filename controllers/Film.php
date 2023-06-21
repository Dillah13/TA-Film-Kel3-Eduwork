<?php


class Film extends Controller {

    public function index()
    {
        // var_dump($_SESSION);exit;

        if (!$_SESSION['login']) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        if ($_SESSION['role'] == 'user') {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        
        $data['active'] = 'film';
        $data['judul'] = 'Film';
        $data['film'] = $this->model('Film_model')->getAllFilm();
        $sutradara = $this->model('Sutradara_model')->getAllSutradara();
        $data['sutradara'] = $sutradara;
        $genre = $this->model('Genre_model')->getAllGenre();
        $data['genre'] = $genre;
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('film/index', $data);
        $this->view('templates/admin/footer');
    }
    public function tambah()
    {
        if ($this->model('Film_model')->tambahDataFilm($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Film_model')->hapusDataFilm($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }
    public function getubah($id)
    {
        $data['active'] = 'film';
        $data['judul'] = 'Film Update';
        $data ['detail'] = $this->model('Film_model')->getFilmById($id);
        $sutradara = $this->model('Sutradara_model')->getAllSutradara();
        $data['sutradara'] = $sutradara;
        $genre = $this->model('Genre_model')->getAllGenre();
        $data['genre'] = $genre;
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('film/update', $data);
        $this->view('templates/admin/footer');

    }
    public function ubah()
    {
        if ($this->model('Film_model')->ubahDataFilm($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/film');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/film');
            exit;
        }
    }
}