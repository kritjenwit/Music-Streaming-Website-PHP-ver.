<?php 

    session_start();
    unset($_SESSION["admin_set"]);
    unset($_SESSION["admin_logged"]);
    header("Location: ../../index.php");
    require "../release_session.php";

?>