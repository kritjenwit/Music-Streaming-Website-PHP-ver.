<?php

    require "encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");
    $_SESSION['message']="";

    if(isset($_POST["btnRegister"])){
       
        
 
        // Original Data

        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);
        $fname = $conn->real_escape_string($_POST["fname"]);
        $lname = $conn->real_escape_string($_POST["lname"]);

        // Encrypt Data

        $encrypt_email = convert_string('e',$email);
        $encrypt_password = convert_string('e',$password);
        $encrypt_fname = convert_string('e',$fname);
        $encrypt_lname = convert_string('e',$lname);

        // Check email in database 
        $checkEmail = $conn->query("SELECT 'email' FROM encrypt_userinfo WHERE email = '".$encrypt_email."' ");
        // If  Yes TODO.. here
        if($checkEmail->num_rows > 0){
            $_SESSION['message'] = "This email is already registered, Please try another email...";
        // if No -> add data to database with encryption
        }else{
            // $registerLoginQuery = $conn->query(" INSERT INTO encrypt_login (user_id,email, password) VALUES('NULL', '".$encrypt_email."', '".$encrypt_password."') ");
            $registerUserinfoQuery = $conn->query("INSERT INTO encrypt_userinfo (user_id, firstname, lastname, email,password) VALUES('NULL','".$encrypt_fname."', '".$encrypt_lname."','".$encrypt_email."','".$encrypt_password."') ");

            if(($registerUserinfoQuery) === true){
                $_SESSION['reg_sucesses']="Register Sucessfully";
                header("Location: sign-in.html");
            }else{
                $_SESSION['message']="Error to connect database";
            }
        }
    }

?>