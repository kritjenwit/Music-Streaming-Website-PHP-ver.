<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist=$_GET['artist'];

    $data_check = $conn->query("SELECT * from music where artist = '$artist' ");
    $data_count_music = $conn->query("SELECT count(*) from music where artist = '$artist' ");
    $data_count_album = $conn->query("SELECT count(*) from album where artist = '$artist' ");

    if($data_count_music > $data_count_album){
        if($data_check->num_rows > 0){
            $data = $conn->query("SELECT * from music where  artist = '$artist' ");
            while($row = $data->fetch_assoc()){
                $url = $row['music_file'];
                $music_name = $row['music_name'];
        
                echo "<li><a href='$url'>$music_name</a></li>";
        
            }
        }
    }else{
        $data = $conn->query("SELECT * from album where  artist = '$artist' ");

        if($data->num_rows > 0){
            while($row = $data->fetch_assoc()){
                $url = $row['album_file'];
                $music_name = $row['music_name'];
        
                echo "<li><a href='$url'>$music_name</a></li>";
            }
        }
    }

?>        