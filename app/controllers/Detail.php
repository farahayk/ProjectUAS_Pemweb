<?php 

class Detail extends Controller {
    public function index()
    {
        $data['judul'] = 'Detail Event';
        $this->view('templates/headerdetail', $data);
        $this->view('detail/index');
        $this->view('templates/footerberanda');
    }
}
?>