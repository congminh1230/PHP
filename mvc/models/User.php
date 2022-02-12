<?php
require_once('models/Query.php');
    class User extends Query
    {
        public $table = 'users';
        public function checkLogin($email, $password)
        {
           $users = $this->where($this->table,['email' => $email, 'password' => $password]);
            if (count($users) > 0) {
                $user = $users[0];
                $_SESSION['auth'] = [
                    'id' => $user['id'],
                    'name' => $user['name']
                ];
                return true;
            }else{
                return false;
            }
        }

        public function checkRegister($email) {
            $users = $this->where($this->table,
            ['email' => $email]
            );
            if (count($users) > 0) {
                $user = $users[0];
                return true;
            }else{
                return false;
            }
        }

        public function getList()
        {
            $users = $this->select ($this -> table, ['id', 'name', 'email', 'password']);
            return $users;
        }

        public function create($data) {
            $status = $this->insert($this->table, $data);
        } 
    }
?>