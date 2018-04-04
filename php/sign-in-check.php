<?php


    if((!isset($_SESSION["email"])) && (!isset($_SESSION["logged"]))){
        header("Location: index.php");
        exit();
    }
    

?>