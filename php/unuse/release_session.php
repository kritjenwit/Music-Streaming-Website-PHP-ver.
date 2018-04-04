<?php

    unset($_SESSION["name"]);
    unset($_SESSION["error"]);
    unset($_SESSION["passchange"]);
    unset($_SESSION["message"]);
    unset($_SESSION["confirmEmail"]);
    unset($_SESSION['admin_set']);
    unset($_SESSION['admin_logged']);
    session_destroy();

?>