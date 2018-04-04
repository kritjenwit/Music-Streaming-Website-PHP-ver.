<?php

    session_start();
    $_SESSION['error']= "";

    // This is used to keep the user logged in website //

    if((isset($_SESSION["email"])) && (isset($_SESSION["logged"]))){
        header("Location: home.html");
        exit();
    }

    // Press Sign in and do this operation //

    if(isset($_POST["sign-in"])){
       
       $conn = new mysqli("localhost","root","","project");

       // function to prevent the SQL injection //
       $email = $conn->real_escape_string($_POST["email"]);
       $password = $conn->real_escape_string($_POST["password"]);

       // Database part
       $data = $conn->query("SELECT * from login where email = '".$email."' and password = '".$password."' ");
       $getFname = $conn->query("SELECT fname from userinfo where email = '".$email."' ");
       if($data->num_rows > 0 ){
            $_SESSION["email"]=$email;
            $_SESSION["logged"]= "logged";
            header("Location: home.html");
            exit();
       }else{
           // echo "Please try again";
           $_SESSION['error']= "Invalid email or password. Please try again";
       }
    }

?>