<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist=$_GET['artist'];
    $data = $conn->query("SELECT * from album where  artist = '$artist' ");
    while($row = $data->fetch_assoc()){
        $url = $row['album_file'];
        $music_name = $row['music_name'];

        echo "<li><a href='$url'>$music_name</a></li>";

    }

?>