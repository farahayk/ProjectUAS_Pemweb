<?php 

class Masuk extends Controller {
    public function index()
    {
        $data['judul'] = 'Masuk';
        $this->view('templates/headerform', $data);
        $this->view('masuk/index');
        $this->view('templates/footerform');
    }
}
?>