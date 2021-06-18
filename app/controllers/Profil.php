<?php 

class Profil extends Controller {
    public function index()
    {
        $data['judul'] = 'Profil';
        $data['akun'] = $this->model('User_model')->getCredential($_POST);
        $this->view('templates/headerdetail', $data);
        $this->view('profil/index', $data);
        $this->view('templates/footerberanda');
    }
}
?>