<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist = $_GET['artist'];
    $album = $_GET['album'];
    $data = $conn->query("SELECT * from album where artist = '$artist' and album_name='$album' GROUP BY artist ");
    while($row = $data->fetch_assoc()){
        
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['album_cover'] ).'" height="" width="500" class="img-thumnail music-pic" >  ';

    
    }


?>
