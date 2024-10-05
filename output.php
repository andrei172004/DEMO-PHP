<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $email              = $_POST["email"];
        $username           = $_POST["username"];
        $password           = $_POST["password"];
        $confirm_password   = $_POST["confirm-password"];

        if(trim($email) != ""){
            echo "USER email is NOT EMPTY<br>". $email;
        } else{
            echo "field email is empty<br>";
        } 

        if(trim($username) != ""){
            echo "USER username is NOT EMPTY<br>". $username;
        } else{
            echo "field username is empty<br>";
        } 

        if(trim($password) != ""){
            echo "USER password is NOT EMPTY<br>". $password;
        } else{
            echo "field password is empty<br>";
        } 

        if(trim($confirm_password) != ""){
            echo "USER confirm_password is NOT EMPTY<br>". $confirm_password;
        } else{
            echo "field confirm_password is empty<br>";
        } 

        if($password == $confirm_password)
        {
            header("location: demo1.php?success=REGISTRATION SUCCESSFUL");
            exit;
        } else {
            header("location: demo1.php?error=PASSWORD MISMATCH");
            exit;
        }

    }

  
?>