<?php
require_once('controllers/AdminController.php');
require_once('models/User.php');
class HomeController extends AdminController{
    public function index(){
        require_once('views/home/index.php');
    }
}