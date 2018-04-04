<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist=$_GET['artist'];
    $data = $conn->query("SELECT * from album where  artist = '$artist' group by artist");
    while($row = $data->fetch_assoc()){
        $url = $row['album_file'];

        echo "<h1 class='display-4'>$artist</h1>";

    }

?>