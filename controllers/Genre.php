<?php

class Genre extends Controller
{
    public function index()
    {

        if (!$_SESSION['login']) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        if ($_SESSION['role'] == 'user') {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        
        $data['active'] = 'genre';
        $data['judul'] = 'Genre';
        $data['genre'] = $this->model('Genre_model')->getAllGenre();
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('genre/index', $data);
        $this->view('templates/admin/footer');
    }
    public function tambah()
    {
        if ($this->model('Genre_model')->tambahDataGenre($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/genre');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/genre');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Genre_model')->hapusDataGenre($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/genre');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/genre');
            exit;
        }
    }
    public function getubah($id)
    {
        $data['active'] = 'genre';
        $data['judul'] = 'Genre Update';
        $data ['detail'] = $this->model('Genre_model')->getGenreById($id);
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('genre/update', $data);
        $this->view('templates/admin/footer');

    }
    public function ubah()
    {
        if ($this->model('Genre_model')->ubahDataGenre($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/genre');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/genre');
            exit;
        }
    }
}
