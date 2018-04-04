<?php

    session_start();
    
    $_SESSION['message']="";

    if(isset($_POST["btnRegister"])){
       
        $conn = new mysqli("localhost","root","","project");
 
        // Original Data

        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);
        $fname = $conn->real_escape_string($_POST["fname"]);
        $lname = $conn->real_escape_string($_POST["lname"]);

        $checkEmail = $conn->query("SELECT 'email' FROM login WHERE email = '".$email."' ");
        if($checkEmail->num_rows > 0){
            $_SESSION['message'] = "This email is already registered, Please try another email...";
        }else{
            
            $registerLoginQuery = $conn->query(" INSERT INTO login (user_id,email, password) VALUES('NULL', '".$email."','".$password."') ");
            $registerUserinfoQuery = $conn->query("INSERT INTO userinfo (user_id, firstname, lastname, email) VALUES('NULL','".$fname."', '".$lname."','".$email."') ");

            if(($registerLoginQuery && $registerUserinfoQuery) === true){
                header("Location: sign-in.html");
            }else{
                $_SESSION['message']="Error";
            }

        }
    }

?>