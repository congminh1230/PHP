<?php
require_once('models/Category.php');
require_once('controllers/BaseController.php');
require_once('models/Query.php');

class CategoryController extends BaseController {
    public function index() {
        $category = new Category();
        $categories = $category->getList();
        $this->view("categories/list.php", [
            'categories' => $categories,
        ]);
    }
    public function index2() {
        $category = new Category();
        $categories = $category->getList();
        $this->view("categories/list.php", [
            'categories' => $categories,
            'check' =>  $_SESSION['success']['check'] = 'success'
        ]);
    }
    public function create() {
        $this->view("Categories/create.php");
    }

    public function delete() {
        $category = new Category();
        $id = (isset($_GET['id']) ? $_GET['id']:0);
        $result= $category->destroy($id);
        $this->redirect("index.php?mod=category&act=index2");
    }

    public function edit() {
        $category = new Category();
        $min = $_POST;
        $categories = $category->find($min);
        foreach ($categories as $category) {
            $this->view("categories/edit.php", [
                'category' => $category,
            ]);
            $this -> view("Categories/edit.php");
        }
      
        $this->view("categories/edit.php", [
            'category' => $category,
        ]);
        $this -> view("Categories/edit.php");
    }

    public function store() {
        $data = $_POST;
        $data_insert =[
            'name' => $data['name'],
            'description' => $data['description'],
            'created_at' => $data['created_at']
        ]; 
        $target_dir = "images/";  // thư mục chứa file upload
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $arr = array(
                'thumbnail'=> $_FILES["thumbnail"]["name"]
            );
            $data_insert = array_merge($data_insert,$arr);
        } else {
            echo "Lỗi upload ảnh.";
        }        
        $category = new Category();
        $categories = $category->create($data_insert);
        $this -> redirect("index.php?mod=category&act=index2");
    }

    public function updateCategory(){

        $data = $_POST;
        $data_update =[
            'name' => $data['name'],
            'parent_id' => $data['parent_id'],
            'description' => $data['description'],
            'created_at' => $data['created_at']
        ]; 
        $target_dir = "images/";  // thư mục chứa file upload
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $arr = array(
                'thumbnail'=> $_FILES["thumbnail"]["name"]
            );
            $data_update = array_merge($data_update,$arr);
        } else {
            echo "Photo upload error.";
        } 
       
        $category = new Category();
        $categories= $category-> updateCategory($data_update,$data['id']);
        $this->redirect("index.php?mod=category&act=index2");
    }
}

?>