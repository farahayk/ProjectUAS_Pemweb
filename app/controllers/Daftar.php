<?php 

class Daftar extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/headerform', $data);
        $this->view('daftar/index');
        $this->view('templates/footerform');
    }

    public function add()
    {
        if ($this->model('User_model')->daftarAkun($_POST) > 0)
        {
            Flasher::setFlasH('Pendaftaran', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/beranda");
            exit;
        } else {
            Flasher::setFlasH('Pendaftaran', 'Gagal', 'danger');
            header("Location: " . BASEURL . "/daftar");
            exit;
        }
    }
}
?>