<?php

    require "encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");
    

    $get_first_name = $conn->query("SELECT * from admin_info where admin_email = '".$_SESSION['admin_encrypt_email']."' ");
    $get_last_name = $conn->query("SELECT * from admin_info where admin_email = '".$_SESSION['admin_encrypt_email']."' ");

    if($get_first_name->num_rows > 0){
        while ($first_name = $get_first_name->fetch_assoc()){
         
            $fname = array();
            $fname[] = convert_string('d',$first_name['admin_firstname']);
            $firstname = implode('',$fname);
            
            while ($last_name = $get_last_name->fetch_assoc()){
            
                $lname = array();
                $lname[] = convert_string('d',$last_name['admin_lastname']);
                $lastname = implode('',$lname);
            
            }
            $name = $firstname . ' ' . $lastname; 
            $_SESSION['admin_name']=$name;
        }
    }    

?>