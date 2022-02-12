<?php
require_once('Controllers/BaseController.php');
require_once('Models/Category.php');
require_once('Models/Post.php');
class HomeController extends BaseController
{
  public function index(){
    $category = new Category();
    $categories = $category-> getListLimit();
    $post = new Post();
    $posts = $post->getList();
    $this->view('home/index.php',[
      'categories' => $categories,
      'posts' => $posts,
    ]);

  }

}
?>


