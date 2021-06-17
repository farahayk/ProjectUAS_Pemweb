<?php 

class Profil extends Controller {
    public function index()
    {
        $data['judul'] = 'Profil';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/headerdetail', $data);
        $this->view('profil/index', $data);
        $this->view('templates/footerberanda');
    }
}
?>