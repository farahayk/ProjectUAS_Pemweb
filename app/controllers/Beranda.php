<?php

class Beranda extends Controller{

    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->view('templates/headerberanda', $data);
        $this->view('beranda/index');
        $this->view('templates/footerberanda');
    }
}