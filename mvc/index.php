<?php
    session_start();
    // var_dump($_SESSION['auth']);
    // die();
    $mod = "home";
    $act = "index";
    if(isset($_GET['mod'])) {
        $mod = $_GET['mod'];
    }
    if(isset($_GET['mod'])){
        $act = $_GET['act'];
    }
    // $mod = $_GET['mod'];
    // $act = $_GET['act'];
    //  echo $mod;
    //  die();
    //  $controller_obj = new CategoryController();
    $class_name = ucfirst($mod) . "Controller";
    $path = __DIR__ . "/controllers/" . $class_name . ".php";
    // echo $path;
    // die();
    if(!file_exists($path)){
        echo "File không tồn tại " .$path;
        exit();
    }
    // 
    require_once($path);

    $controller_obj = new $class_name();
    // $controller_obj = new PostController();

    $controller_obj->$act();
?>