<?php

class Auth extends Controller
{

    public function prosesLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model('Auth_model')->getUserByUsername($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['login'] = true;
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
                $_SESSION['foto_profile'] = $user['photo_profile'];
                if ($_SESSION['role'] == 'admin') {
                    header('Location: ' . BASEURL . '/film');
                } else {
                    header('Location: ' . BASEURL . '/home');
                }
            } else {
                Flasher::setFlash('Password', 'Salah', 'danger');
                header('Location: ' . BASEURL . '/home');
                exit;
            }
        } else {
            Flasher::setFlash('Username', 'Tidak ditemukan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function prosesRegister()
    {
        // check username availability
        if ($this->model('Auth_model')->getUserByUsername($_POST['username'])) {
            Flasher::setFlash('Username', 'Sudah digunakan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        if ($this->model('Auth_model')->register($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function prosesRegisterAdmin()
    {
        // check username availability
        if ($this->model('Auth_model')->getUserByUsername($_POST['username'])) {
            Flasher::setFlash('Username', 'Sudah digunakan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }

        if ($this->model('Auth_model')->registerAdmin($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    // update profile 
    public function updateProfile()
    {
        if ($this->model('Auth_model')->updateProfile($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diupdate', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diupdate', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL . '/home');
    }
}