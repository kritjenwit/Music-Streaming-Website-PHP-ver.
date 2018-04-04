<?php

    require "encrypt-decrypt.php";

    if(isset($_POST['sign-in'])){
         
        $conn = new mysqli("localhost","root","","project");

        // Get email and password from html page
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        // encrypt data
        $encrypt_email = convert_string('e',$email);
        $encrypt_password = convert_string('e',$password);

        // Check email in database
        $data = $conn->query("SELECT * from admin_info where admin_email = '".$encrypt_email."' ");

        // if yes
        if($data->num_rows > 0){
            $_SESSION['admin_set'] = "admin";
            $_SESSION['admin_logged'] = true;
            $_SESSION['admin_encrypt_email']=$encrypt_email;

            header("Location: admin-panel/dashboard.html?user-table=1&artist-table=1&music-table=1&album-table=1");
            exit();

        }else{
            $_SESSION['error']= "Invalid email or password. Please try again";

        }

    }

?>