<?php

    $conn = new mysqli("localhost","root","","project");

    $check_data = $conn->query("SELECT * from artist where artist = '$arist' ");

?>