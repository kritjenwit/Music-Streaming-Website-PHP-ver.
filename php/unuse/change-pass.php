<?php

    require "encrypt-decrypt.php";
    $_SESSION['error']="";

    if(isset($_POST['btn-confirm'])){
        $conn = new mysqli("localhost","root","","project");
        $pass = $conn->real_escape_string($_POST['pass']);
        $repass = $conn->real_escape_string($_POST['repass']);

        // encrypt data
        $encrypt_pass = convert_string('e',$pass);
        $encrypt_repass = convert_string('e',$repass);

        $data = $conn->query("UPDATE encrypt_userinfo set password = '".$encrypt_pass."' where email='".$_SESSION['confirmEmail']."' ");

        if($encrypt_pass == $encrypt_repass){
            if($data === true){
                header("Location: sign-in.html");
                $_SESSION['passchange']="Your password has been changed";
                
            }else{
                $_SESSION['error']="Failed to change your password. Please try again";
            }
        }else{
            $_SESSION['error']="Password and Confirm password should be same"; 
        }
        
    }

?>