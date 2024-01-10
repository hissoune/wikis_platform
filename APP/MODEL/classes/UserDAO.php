<?php
require 'APP\MODEL\classes\usersclass.php';

class UserDAO{

    private $db;

   

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function insert_User($user) {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->db->prepare($query);
        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt->bindParam(':email', $email );
        $stmt->bindParam(':password', $password );
        $stmt->execute();
        $result = $stmt->fetch();
    
        if (!$result) {
            $insertQuery = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
            $insertStmt = $this->db->prepare($insertQuery);
            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $insertStmt->bindParam(':name', $name);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':password', $password);
            $insertStmt->execute();
            $message = "success";
    } else {
        $message = "exists";
    }
    return $message;
    }
    
    public function checklogin($user){
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->db->prepare($query);
        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt->bindParam(':email', $email );
        $stmt->bindParam(':password', $password );
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

    }
}