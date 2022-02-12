<?php
require_once('models/Query.php');
  class Category extends Query
  {
      public $table = 'categories';
      public function getList()
      {
        $categories = $this -> select ($this -> table, ['id', 'name', 'parent_id', 'thumbnail', 'description', 'created_at']);
        return $categories;
      }

      // 
      public function find($id) {
        $categories = $this->where($this->table,$id);
        return $categories;
      }

      // xóa
      public function destroy($id) {
        $result = $this->delete($this->table,$id);
        return $result;
      }

      // add data
      public function create($data) {
          $status = $this->insert($this->table, $data);
        return $status;
      } 

      // uploat data
      public function edit($data,$id) {
        // $id = $_POST;
         return $this->update($this->table, $data,$id);
       
      }
      
      public function updateCategory($data,$id){
        $updateProcess = $this -> update($this->table, $data, ['id' => $id]);
        return $updateProcess;
      }
      
  };
?>