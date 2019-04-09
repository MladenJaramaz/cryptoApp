<?php

class QueryBuilder {

    private $pdo;
    function __construct($pdo) {

        $this->pdo = $pdo;
    }

    public function newUser($user_data) {
        
        $full_name = $user_data->full_name;
        $investment = $user_data->investment;
        
        $sql = $this->pdo->prepare("INSERT INTO users VALUES (NULL, '$full_name', '$investment', NULL)");
        $result = $sql->execute();
        if ($result) {
            $users = $this->getAllUsers();
            return json_decode($users);
        } else {
            return "error";
        }
    }
 
    public function getUser($id) {
        
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE id=$id");
    }    

    public function getAllUsers() {

        $sql = $this->pdo->prepare("SELECT * FROM users");
        $result = $sql->execute();
        if ($result) {
            return $result;
        } else {
            return "error";
        }
    }
}

return new QueryBuilder(Connection::make());
?>