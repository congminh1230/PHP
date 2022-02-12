<?php
require_once('models/User.php');
require_once('controllers/BaseController.php');
require_once('controllers/AdminController.php');
class UserController extends BaseController
{
    public function index() {
        $user = new User();
        $users = $user->getList();
    }
    public function getUsers() {
        $user = new User();
        $users = $user->getList();
        $this -> view("Users/list.php",[
            'users' => $users
        ]);

    }
    public function create() {
        $this -> view("auth/register.php");
    }

    public function store() {
        $data = $_POST;
        $data_insert =[
            'email' => $data['email'],
            'password' => $data['password'],
        ];   
        $user = new User();
        if($user->checkRegister($_POST['email'])) {
            $_SESSION['error']['email'] = 'Email đã tồn tại';
            
            $this->redirect('index.php?mod=auth&act=register');
            die();

        }else {
            if($user->checkRegister($_POST['password'])) {
                $_SESSION['error']['password'] = 'không được để rỗng';
                $this->redirect('index.php?mod=auth&act=register');
                die();
            }
            $this -> view("auth/login.php",[
                'data' => $data,
            ]);
            $this->redirect('index.php?mod=auth&act=login');
        }
        
        $status = $user->create($data_insert);
        die();
        $this -> redirect("index.php?mod=home&act=index");

    }
}
?>