<?php 

class Profil extends Controller {
    public function index()
    {
    
        $data['judul'] = 'Profil';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/headerdetail', $data);
        $this->view('profil/index', $data);
        $this->view('templates/footerberanda');
    }
}    