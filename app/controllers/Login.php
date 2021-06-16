<?php 

class Login extends Controller {
    public function index()
    {
        $data['judul'] = 'Masuk';
        $this->view('templates/headerform', $data);
        $this->view('login/index');
        $this->view('templates/footerform');
    }
}
?>