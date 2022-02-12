<?php
  require_once('Models/Query.php');
  require_once('Models/Connection.php');

  class Category extends Query
  {
    public $conn;
    public function __construct(){

      $connection = new Connection();
      // $connection -> password = '';
      $this -> conn = $connection -> connect();
    }

      public function getListLimit()
      {

        $query = "SELECT * FROM categories
                  ORDER BY created_at ASC
                  LIMIT 0,8";
        	$result = $this->conn->query($query);
          $data = array();

      		while($row = $result->fetch_assoc()) {
      			$data[] = $row;
      		};
      		return $data;
      }
      public $table = 'categories';
      public function getList()
      {
        $categories = $this -> select ($this -> table, ['id', 'name', 'parent_id', 'thumbnail', 'description', 'created_at']);
        return $categories;
      }
      
    }
?>