<?php

class User extends Controller
{
    
    public function index()
    {
        $data['judul'] = 'User';
        $data['active'] = 'user';
        $data['user'] = $this->model('User_model')->getAllUser();
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('user/index', $data);
        $this->view('templates/admin/footer');
    }

    public function tambah()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('User_model')->hapusDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function getubah($id)
    {
        $data['judul'] = 'User Update';
        $data ['detail'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/sidebar', $data);
        $this->view('user/update', $data);
        $this->view('templates/admin/footer');

    }

    public function ubah()
    {
        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

}