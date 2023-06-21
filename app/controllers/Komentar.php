<?php 

class Komentar extends Controller {
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
        
        $data['active'] = 'komentar';
        $data ['judul'] = 'Komentar Film';
        $data ['komentar'] = $this->model('Komentar_model')->getAllKomentar();
        $data ['film'] = $this->model('Film_model')->getAllFilm();
        $this->view('templates/admin/header',$data);
        $this->view('templates/admin/sidebar',$data);
        $this->view('komentar/index', $data);
        $this->view('templates/admin/footer');
    }
    

    public function tambah()
    {
        if( $this->model('Komentar_model')->tambahDataKomentar($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            // Menghitung rating rata" film berdasarkan komentar
            $data ['film'] = $this->model('Film_model')->getFilmById($_POST['id_film']);
            $data ['komentar'] = $this->model('Komentar_model')->getKomentarByIdFilm($_POST['id_film']);
            $rating = 0;
            foreach ($data['komentar'] as $komentar) {
                $rating += $komentar['rating'];
            }
            $rating = $rating / count($data['komentar']);
            // var_dump($rating);exit;
            $this->model('Film_model')->ubahDataFilmRating(number_format($rating,1), $_POST['id_film']);
            header('Location: ' . BASEURL . '/home/detail/'.$_POST['id_film']);
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Komentar_model')->hapusDataKomentar($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/komentar');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/komentar');
            exit;
        }
    }
}