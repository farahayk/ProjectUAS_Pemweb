<?php 

class Registrasi extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/headerform', $data);
        $this->view('registrasi/index');
        $this->view('templates/footerform');
    }
}
?>