<?php 
class User_control{

    public static function addUser(){
        extract($_POST);

        $user = new User('',$uname,$email,$pass,'');
        $UserdDAO = new UserDAO();
       $message= $UserdDAO->insert_User($user);
       if($message === 'success'){
        echo'registration success';
        echo'<a class="nav-link" href="index.php?action=login">back to log in </a>';
       }else{
        echo'existe';
       }
        
    }
}