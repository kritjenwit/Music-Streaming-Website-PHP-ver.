<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist = $_GET['artist'];
    $album = $_GET['album'];
    $data = $conn->query("SELECT * from album where artist = '$artist' and album_name='$album'  ");
    while($row = $data->fetch_assoc()){
        $url = $row['album_file'];
        $music_name = $row['music_name'];

        echo "<li><a href='$url'>$music_name</a></li>";
    }

?>