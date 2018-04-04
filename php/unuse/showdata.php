<?php

    // require "encrypt-decrypt.php";
    // $conn = new mysqli("localhost","root","","project");

    // $data = $conn->query("select * from encrypt_userinfo");
    // if($data -> num_rows > 0){
    //     while ($row = $data->fetch_assoc()){
    //         $row['user_id'];

    //         $result2 = convert_string('d',$row['email']);
            
    //         // $_SESSION['result']=$result;
    //         // echo $_SESSION['result'];

    //         // echo $result[] = convert_string('d',$row['password']);
    //         // echo $result[] = convert_string('d',$row['firstname']);
    //         // echo $result[] = convert_string('d',$row['lastname']);

    //     }
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        require "encrypt-decrypt.php";
        $conn = new mysqli("localhost","root","","project");
    
        $data = $conn->query("select * from encrypt_userinfo");
        if($data -> num_rows > 0){
            while ($row = $data->fetch_assoc()){
                echo $row['user_id'];
                echo $_SESSION['admin_name'];
                // $_SESSION['result']=$result;
                // echo $_SESSION['result'];
    
                // echo $result[] = convert_string('d',$row['password']);
                // echo $result[] = convert_string('d',$row['firstname']);
                // echo $result[] = convert_string('d',$row['lastname']);
    
            }
        }
    ?>

</body>
</html>