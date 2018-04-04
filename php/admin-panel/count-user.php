<?php

$conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT count(user_id) from encrypt_userinfo");
    
    while ($row = $data->fetch_array()) {
        echo $row['0'];
    }

?>