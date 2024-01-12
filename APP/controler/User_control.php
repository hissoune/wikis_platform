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

    public static function log_in(){
        extract($_POST);
        $user = new User('','',$email,$pass,'');
        $UserdDAO = new UserDAO();
        $result = $UserdDAO->checklogin($user);
        if($result){
            session_start();
            $_SESSION['user']= $result;
            if($result['role'] == 'admin'){
                header('location: index.php?action=admin');
            }else{
                $_SESSION['user']= $result;
                header('location: index.php?action=auther');

            }
        }else{
            echo'this user doesnt exist';
        }



    }
    public static function statisticuser(){
        $UserdDAO = new UserDAO();
        $result = $UserdDAO->statsticuser();
        return $result;
        
    }
    public static function if_user(){
        session_start();
        $user = $_SESSION['user'];
        if($user){
            if($user['role']=='admin'){
                header('location: index.php?action=admin');
            }else{
                header('location: index.php?action=auther');

            
        }
    }else{
        header('location: index.php');
     
    }
}
public static  function logout(){
    session_start();
    session_destroy();
    header('location: index.php');
}

}