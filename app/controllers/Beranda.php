<?php

class Beranda extends Controller{

    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->view('templates/headerberanda', $data);
        $this->view('beranda/index');
        $this->view('templates/footerberanda');
    }

    public function donasi()
    {
        if ($this->model('Pendonasi_model')->tambahDonasi($_POST) > 0)
        {
            Flasher::setFlasH('Donasi', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/beranda");
            exit;
        } else {
            Flasher::setFlasH('Donasi', 'Gagal', 'danger');
            header("Location: " . BASEURL . "/beranda");
            exit;
        }
    }

    public function relawan()
    {
        if ($this->model('Relawan_model')->tambahRelawan($_POST) > 0)
        {
            Flasher::setFlasH('Relawan', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/profil");
            exit;
        } else {
            Flasher::setFlasH('Relawan', 'Gagal', 'danger');
            header("Location: " . BASEURL . "/beranda");
            exit;
        }
    }
}