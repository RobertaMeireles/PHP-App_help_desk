<?php

    //open session to use session:
    session_start();
    
    //Variables
    //false or null to change afther logged in
    $authenticatedUser = false;
    $user_id = null;
    $type_user_id = null;

    //arrays of type users:
    $type = array(1 => 'Adm', 2 => 'user');


    
    //arrays of registered users:
    $users = array(
        array('id'=> 1,'email' =>'adm@user.com','password'=>'123456','type'=>1),
        array('id'=> 2,'email' =>'adm1@user.com','password'=>'123456','type'=>1),
        array('id'=> 3,'email' =>'user@user.com','password'=>'123456','type'=>2),
        array('id'=> 4,'email' =>'user1@user.com','password'=>'123456','type'=>2)
    );


    //method post:
    $_POST['email'];
    $_POST['password'];



    /*foreach to validate access, if there is email and correct password change the variable 
    $authenticatedUser (true), $user_id (user id logged) and  $type_user_id (type user loogged):
    */
    foreach($users as $user){

        if($user['email']==$_POST['email'] && $user['password']==$_POST['password'] ){
            $authenticatedUser = true; 
            $user_id = $user['id']; 
            $type_user_id = $user['type'];

        }
    }

    //if $authenticatedUser was true:
    if($authenticatedUser){
        $_SESSION['authenticated'] = 'yes'; //send information yes to global session 
        $_SESSION['id'] = $user_id; //send user's id to global session
        $_SESSION['type_id'] = $type_user_id; //send type's user to global session
        header('Location: home.php'); //go to home.php
    }else{
        $_SESSION['authenticated'] = 'no'; //send information no to session
        header('Location: index.php?login=erro'); //send this information to SET, showing access error and returning to login screen
    }


?>