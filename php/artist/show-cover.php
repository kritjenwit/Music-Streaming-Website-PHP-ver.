<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist = $_GET['artist'];

    $data_search = $conn->query("SELECT * from music where artist = '$artist' ");
    
    if($data_search->num_rows > 0){
        $data = $conn->query("SELECT * from music where artist = '$artist' GROUP BY artist ");
        while($row = $data->fetch_assoc()){
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['music_cover'] ).'" height="" width="500" class="img-thumnail music-pic" >  ';
        }
    }else{
        $data = $conn->query("SELECT * from album where artist = '$artist' GROUP BY artist ");
        while($row = $data->fetch_assoc()){
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['album_cover'] ).'" height="" width="500" class="img-thumnail music-pic" >  ';
        }
    }


?>
