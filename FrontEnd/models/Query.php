<?php
  require_once('models/Connection.php');
  class Query{
    public $conn;


    public function __construct(){

      $connection = new Connection();
      // $connection -> password = '';
      $this -> conn = $connection -> connect();
    }

    protected function select($table, $columns = '*')
    {

      // $connection->conn

  		if ($columns == '*') {
  			$query = "SELECT * FROM " . $table;
  		}elseif (is_array($columns)) {
  			$sub_string = '';
  			foreach ($columns as $i =>$column) {
  				$sub_string .= '`'.$column . '`';

  				if ($i + 1 != count($columns)) {
  					$sub_string .= ',';
  				}
  			}

  			$query = "SELECT " . $sub_string . " FROM " . '`' . $table . '`';
  		}else{
  			exit();
  		}

  		$result = $this->conn->query($query);
  		// Buoc 3
  		// Tạo 1 mảng để chứa dữ liệu
  		$data = array();

  		while($row = $result->fetch_assoc()) {
  			$data[] = $row;
  		};
  		return $data;
    }
	protected function insert($table, $data){
	    $query = "INSERT INTO $table";
	    $string_1 = '';
	    $string_2 = '';

	    $i = 0;

	    foreach ($data as $column => $value){
	        $i++;

	        $string_1 .= $column;
	        if ($i != count($data)){ // Nếu không phải là cột cuối cùng thì mới thêm dấu ,
	            $string_1 .= ',';
	        }

	        $string_2 .= "'" . $value . "'";
	        if ($i != count($data)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
	            $string_2 .= ',';
	        }
	    }
	    $string = ' (' . $string_1 . ')' . ' VALUES ' . '(' . $string_2 . ')';
	    $query = $query . $string;
	   

	    $status = $this->conn->query($query);

	    return $status;
	}
	protected function where($table, $where = []){
        $query = "SELECT * from $table WHERE ";
        $string = '';
        $i = 0;
        foreach ($where as $column => $value) {
            $i++;
            $string .= "$column=" . "'" . $value . "'";

            if ($i != count($where)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                $string .= " AND ";
            }
        }
        $query .= $string;

        $result = $this->conn->query($query);
        $data = array();
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

	// 
	protected function update($table, $data, $where = [])
    {
        $query = "UPDATE $table SET ";
        $string1 = '';
        $j = 0;
        foreach ($data as $key => $value)
        {
            $j++;
            $string1 .= $key . '=' . "'" . $value . "'";
            if ($j != count($data)){
                $string1 .= ", ";
            }
        }
        $query .= $string1;

        if (!empty($where)){
            $query .= " WHERE ";
            $i = 0;
            $string2 = '';
            foreach ($where as $column => $value) {
                $i++;
                $string2 .= "$column=" . "'" . $value . "'";

                if ($i != count($where)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                    $string2 .= " AND ";
                }
            }

            $query .= $string2;
        }
        return $this->conn->query($query);
    }
	// 
	protected function delete($table,$id) {
	    	$query = "DELETE FROM ". $table." WHERE id = ".$id;
			$result = $this->conn->query($query);
	}
    // 
    protected function getId($table, $id){
	    $query = "SELECT * from $table WHERE id = ". $id;
	    		// Thực thi câu lệnh
	    $result =  $this->conn->query($query);

		// Trả về 1 bản ghi
	    $row = $result->fetch_assoc();

		return $row;
	}
	
  }
  
?>