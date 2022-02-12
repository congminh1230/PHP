<?php
require_once('models/Query.php');
  class Post extends Query
  {
      public $table = 'posts';
      public function getList()
      {
        $posts = $this -> select ($this -> table, ['id', 'title', 'description', 'thumbnail', 'content','category_id', 'created_at']);
        return $posts;
      }
      public function find($id) {
        $posts = $this->getId($this->table,
        $id
        );
           
        return $posts;
      }
      
      public function findPostByCategory($id){
        $query = "	SELECT posts.id, posts.title, posts.description, posts.thumbnail, posts.category_id,posts.content, posts.created_at, categories.name
                  FROM posts
                  INNER JOIN categories ON categories.id = $id AND categories.id = posts.category_id";
        $result = $this->conn->query($query);
        $data = array();
        while($row = $result->fetch_assoc()) {
          $data[] = $row;
        };
        return $data;
      }
  }
?>