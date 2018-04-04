<?php

    if(!isset($_SESSION['admin_set']) && (!isset($_SESSION['admin_logged']))){
        header("Location: ../index.php");
        exit();
    }

?>