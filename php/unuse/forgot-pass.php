<?php

    require "encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");

    $_SESSION["message"]="";

    if(isset($_POST['confirm-email-btn'])){
        $email = $conn->real_escape_string($_POST['email']);

        // Encrypt Data
        $encrypt_email = convert_string('e',$email);

        $data = $conn->query("SELECT * from encrypt_userinfo where email = '".$encrypt_email."' ");
        if($data->num_rows> 0){
            $_SESSION["confirmEmail"]=$encrypt_email;
            header("location: change-pass.html");
        }else{
            $_SESSION["message"]= "Invalid Email please try again";
        }
    }

?>