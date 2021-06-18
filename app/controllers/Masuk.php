<?php 

class Masuk extends Controller {
    public function index()
    {
        $data['judul'] = 'Masuk';
        $this->view('templates/headerform', $data);
        $this->view('masuk/index');
        $this->view('templates/footerform');
    }

    public function login()
    {
        $data = $_POST;

        
        $credential = $this->model('User_model')->getCredential($_POST['email']);
        

        if ($credential['password'] == $data['password'])
        {
            $_SESSION['email'] = $data['email'];
            header("Location: " . BASEURL . "/beranda");
            exit;
        } else {
            // Flasher::setFlasH('Login', 'Gagal', 'danger');
            header("Location: " . BASEURL . "/masuk");
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['email']);
        header("Location: " . BASEURL . "/masuk");
        exit;
    }
}
?>