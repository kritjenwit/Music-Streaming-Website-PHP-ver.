<?php

    $conn = new mysqli("localhost","root","","project");

    if(isset($_POST['music_upload'])){

        // TEXT
        $music_name = $conn->real_escape_string($_POST['music_name']);
        $artist = $conn->real_escape_string($_POST['music_artist']);

        // MUSIC  

        $music_file = $_FILES['music_file']['name'];
        $temp = $_FILES['music_file']['tmp_name'];

        move_uploaded_file($temp,"../../../uploads/music/".$music_file);
        $url = "http://127.0.0.1/project/uploads/music/$music_file";

        // COVER

        $music_cover = addslashes(file_get_contents($_FILES['music_cover']['tmp_name']));
        $data = $conn->query("insert into music (music_id,music_name,artist,music_cover,music_file) values ('NULL','$music_name','$artist','$music_cover','$url') ");
        if($data === true){
           header("Location: ../../../admin-panel/add-music.php");
        }
    }

    $conn->close();

?>
