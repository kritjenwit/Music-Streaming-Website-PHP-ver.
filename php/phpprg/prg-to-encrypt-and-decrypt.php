<?php

    require "../encrypt-decrypt.php";
    if(isset($_POST['convert'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $email = convert_string('e',$email);

        echo $email . ' ';
        echo $pass . ' ';
        echo $fname. ' ' ;
        echo $lname . ' ';
    }

    


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
    
    <form action="prg-to-encrypt-and-decrypt.php" method="post">
        <input name="email" type="text" placeholder="text here">
        <input name="password" type="text" placeholder="password here">
        <input name="fname" type="text" placeholder="fname here">
        <input name="lname" type="text" placeholder="lname here">
        <button name="convert">Convert</button>
    </form>

    <?php


    ?>

</body>
</html>