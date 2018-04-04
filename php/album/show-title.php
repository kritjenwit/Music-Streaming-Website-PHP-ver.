<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist = $_GET['artist'];
    $album = $_GET['album'];
    $data = $conn->query("SELECT * from album where artist = '$artist' and album_name='$album' GROUP BY artist ");
    while($row = $data->fetch_assoc()){
        $artist = $row['artist'];

        echo "<h1 class='display-4'>$artist</h1>";

    }

?>