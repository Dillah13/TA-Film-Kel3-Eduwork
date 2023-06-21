<?php

class Sutradara extends Controller
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

        $data['active'] = 'sutradara';
        $data ['judul'] = 'Daftar Sutradara';
        $data ['sutradara'] = $this->model('Sutradara_model')->getAllSutradara();
        $this->view('templates/admin/header',$data);
        $this->view('templates/admin//sidebar',$data);
        $this->view('sutradara/index', $data);
        $this->view('templates/admin/footer');
    }
    public function tambah()
    {
        if( $this->model('Sutradara_model')->tambahDataSutradara($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Sutradara_model')->hapusDataSutradara($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        }
    }
    public function getubah($id)
    {
        $data['active'] = 'sutradara';
        $data['judul'] = 'Sutradara Update';
        $data ['detail'] = $this->model('Sutradara_model')->getSutradaraById($id);
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('sutradara/update', $data);
        $this->view('templates/admin/footer');
    }
    public function ubah()
    {
        if( $this->model('Sutradara_model')->ubahDataSutradara($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/sutradara');
            exit;
        }
    }
}