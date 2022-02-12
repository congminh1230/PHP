<?php
require_once('models/Post.php');
require_once('controllers/BaseController.php');
class PostController extends BaseController {
   
    public function getPost() {
        $post = new Post();
        $id = $_GET['id'];
        $posts = $post->find($id);
        $this->view("PostDetail/list.php", [
            'posts' => $posts,
        ]);
    }

    public function getData() {
        $id = (isset($_GET['id'])?$_GET['id']:0);
        $post = new Post();
        $posts = $post->findPostByCategory($id);
        $this->view("Category/list.php", [
            'posts' => $posts,
        ]);
    } 

    public function getListPosts() {
        $post = new Post();
        $posts = $post->getList();
        $this->view("Posts/list.php", [
            'posts' => $posts,
        ]);
    }
}

?>