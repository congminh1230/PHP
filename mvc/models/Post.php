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

      public function find() {
        $id = $_POST;
        $posts = $this->where($this->table,$id);
        return $posts;
      }

      // xóa
      public function destroy() {
        $id = (isset($_GET['id']) ? $_GET['id']:0);
        $result = $this->delete($this->table, $id);
        return $result;
      }

      public function create($data) {
        $status = $this->insert($this->table, $data);
      } 

      public function edit($data) {
        $id = $_POST;
        $status = $this->update($this->table, $data,$id);
        return $status;
      }

      public function updatePost($data, $id){
        $updateProcess = $this -> update($this->table, $data, ['id' => $id]);
        return $updateProcess;
      }
  }
?>