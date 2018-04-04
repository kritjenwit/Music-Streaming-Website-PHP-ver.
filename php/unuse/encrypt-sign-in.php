<?php

        require "encrypt-decrypt.php";
        $conn = new mysqli("localhost","root","","project");

        $_SESSION['error']= "";

        // This is used to keep the user logged in website //

        if((isset($_SESSION["email"])) && (isset($_SESSION["logged"]))){
            header("Location: home.html");
            exit();
        }

        // Press Sign in and do this operation //

        if(isset($_POST["sign-in"])){
        
        

        // function to prevent the SQL injection //
        // Original Data
        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);

        // Encrypt Data

        $encrypt_email = convert_string('e',$email);
        $encrypt_password = convert_string('e',$password);

        // Database part
        // Check data in database 
        $data = $conn->query("SELECT * from encrypt_userinfo where email = '".$encrypt_email."' and password = '".$encrypt_password."' ");

        if($data->num_rows > 0 ){
            $_SESSION["email"]=$email;
            $_SESSION["logged"]= "logged";
            
            $_SESSION['encrypt_email']=$encrypt_email;
            
            header("Location: home.html");
            exit();
        }else{
            
            // If email or password is not available in database ;
            $_SESSION['error']= "Invalid email or password. Please try again";
        }
    }

?>