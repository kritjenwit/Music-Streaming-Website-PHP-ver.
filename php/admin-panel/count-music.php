<?php

$conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT count(music_id) from music");
    
    while ($row = $data->fetch_array()) {
        echo $row['0'];
    }

?>