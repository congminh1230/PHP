<?php
require_once('models/Post.php');
require_once('models/Category.php');
require_once('controllers/BaseController.php');
class PostController extends BaseController {
    public function index() {
        $post = new Post();
        $posts = $post->getList();
        $this->view("posts/post.php", [
            'posts' => $posts
        ]);
    }
    public function index2() {
        $post = new Post();
        $posts = $post->getList();
        $this->view("posts/post.php", [
            'posts' => $posts,
            'check' =>  $_SESSION['success']['check'] = 'success'
        ]);
    }
    public function create() {
        $category = new Category();
        $categories = $category->getList();
        $this->view("posts/create.php", [
            'categories' => $categories,
        ]);
        $this -> view("Posts/create.php");
    }

    // xóa
    public function delete() {
        $post = new Post();
        $posts= $post->destroy();
        $this->redirect("index.php?mod=post&act=index2");
    }

    // edit
    public function edit() {
        $post = new Post();
        $posts = $post->find();
        $category = new Category();
        $categories = $category->getList();
        foreach ($posts as $post) {
            $this->view("Posts/edit.php", [
                'post' => $post,
                'categories' => $categories
            ]);
        }
    }
    
    public function store() {
        $data = $_POST;
        $data_insert =[
            'title' => $data['title'],
            'description' => $data['description'],
            'thumbnail'  => $data['thumbnail'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
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
            echo " Photo upload error.";
        }  
        $post = new Post();
        $status = $post->create($data_insert);

        $this -> redirect("index.php?mod=post&act=index2");

    }
    public function updatePost(){

        $data = $_POST;
        $data_update =[
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
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
        $post = new Post();
        $posts= $post-> updatePost($data_update,$data['id']);
        $this -> redirect("index.php?mod=post&act=index2");
 
    }
}

?>