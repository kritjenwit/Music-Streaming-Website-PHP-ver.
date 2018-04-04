<?php

    $conn = new mysqli("localhost","root","","project");

    if(isset($_POST['album_upload'])){

        // TEXT
        $album_name = $conn->real_escape_string($_POST['album_name']);
        $artist = $conn->real_escape_string($_POST['album_artist']);
        $music_name=$conn->real_escape_string($_POST['album_music_name']);

        // MUSIC FILE

        $album_file = $_FILES['album_file']['name'];
        $temp = $_FILES['album_file']['tmp_name'];

        move_uploaded_file($temp,"../../../uploads/album/".$album_file);
        $url = "http://127.0.0.1/project/uploads/album/$album_file";

        //MUSIC COVER

        $album_cover = addslashes(file_get_contents($_FILES['album_cover']['tmp_name']));
        $data = $conn->query("insert into album (album_id,album_name,artist,music_name,album_cover,album_file) values ('NULL','$album_name','$artist','$music_name','$album_cover','$url') ");
        if($data === true){
           echo '<script>alert("Music insert to database");</script>';
           header("Location: ../../../admin-panel/add-music.html");
        }
    }

    $conn->close();

?>
