<?php

$conn = new mysqli("localhost","root","","project");

    

    $music_id = $_GET['id'];
    $data=$conn->query("select * from music WHERE music_id = $music_id");

    while($row = $data->fetch_assoc{
        echo $row['music-cover'];
        header("Content-type: image/png");
    }else{
        echo "Nodata";
    }

?>