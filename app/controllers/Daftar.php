<?php 

class Daftar extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/headerform', $data);
        $this->view('daftar/index');
        $this->view('templates/footerform');
    }
}
?>