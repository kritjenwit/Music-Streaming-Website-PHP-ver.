<?php

    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["logged"]);
    unset($_SESSION["name"]);
    unset($_SESSION["error"]);
    unset($_SESSION["passchange"]);
    unset($_SESSION["message"]);
    unset($_SESSION["confirmEmail"]);
    unset($_SESSION['admin_set']);
    unset($_SESSION['admin_logged']);
    header("Location: ../index.php");
    session_destroy();
    

?>