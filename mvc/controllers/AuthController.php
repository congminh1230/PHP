<?php
require_once('controllers/BaseController.php');
require_once('models/User.php');
class AuthController extends BaseController                                                 
{
    // đăng nhập       
    public function login()
    {
            $this->view('auth/login.php');
    }

    // kiểm tra
    public function handleLogin()
    {
        $data = $_POST;
        $user= new User();
        if($_POST['email'] == '') {
            $_SESSION['error']['email'] = 'Không được để trống';
            $this->redirect('index.php?mod=auth&act=login');

        }else {
            if(!$user->checkLogin($_POST['email'], $_POST['password'])) {
                $_SESSION['error']['email'] = 'Email không tồn tại hoặc mật khẩu không đúng';
                $this->redirect('index.php?mod=auth&act=login');
        }
        if ($user->checkLogin($_POST['email'], $_POST['password'])) {
                $this->view('home/index.php',[
                    'data' =>  $_SESSION['error']['email'] = 'Không được để trống'
                ]);
                $this->redirect('index.php?mod=home&act=index');
        }else {
                $this->redirect('index.php?mod=auth&act=login');
        }
       }
    }

    public function handleRegister()
    {
        $user= new User();
        if ($user->checkLogin($_POST['email'], $_POST['password'])) {
            $this->redirect('index.php?mod=home&act=index');
        }else {
            $this->redirect('index.php?mod=auth&act=login');
        }
    }

    // Đăng Ký     
    public function register()
    {
        $this->view('auth/register.php');
    }

    // đăng xuất
    public function logout() {
        unset($_SESSION['auth']);
        $this -> redirect('index.php?mod=auth&act=register');
    }
}

?>