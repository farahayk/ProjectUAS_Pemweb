<?php 

class Profil extends Controller {
    public function index()
    {
        $data['judul'] = 'Profil';
        $this->view('templates/headerdetail', $data);
        $this->view('profil/index');
        $this->view('templates/footerberanda');
    }
}
?>