<?php

    require "encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");
    

    // Show name in home page
    $get_first_name = $conn->query("SELECT firstname from encrypt_userinfo where email = '".$_SESSION['encrypt_email']."' ");
    $get_last_name = $conn->query("SELECT lastname from encrypt_userinfo where email = '".$_SESSION['encrypt_email']."' ");

    // Decrypt data from database 
    // Decrypt first name
    while($first_name = $get_first_name ->fetch_assoc()){

        $fname = array();
        $fname[] = convert_string('d',$first_name['firstname']); 
                    
        $firstname = implode('',$fname);

                // Decrypt Lastname
        while($last_name = $get_last_name ->fetch_assoc()){

            $lname = array();
            $lname[] = convert_string('d',$last_name['lastname']); 
                        
            $lastname = implode('',$lname);
                        
        }       
                
        // Concatinate decrypted firstname and lastname

        $name = $firstname .' ' . $lastname;

        // Name of user
        $_SESSION['name']=$name;
    }

    
?>