<?php

$conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT count(DISTINCT(album_name)) from album ");
    
    while ($row = $data->fetch_array()) {
        echo $row['0'];
    }

?>