<?php

require "boot.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = $_REQUEST["query"];
    $json_data = file_get_contents("php://input");
    $user_data = json_decode($json_data);
    switch ($query) {
        
        case "newUser":
            $result = $db->newUser($user_data);
            echo $result;
            break;
        default:
            break;
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $result = $db->newUser($user_data);
}

?>