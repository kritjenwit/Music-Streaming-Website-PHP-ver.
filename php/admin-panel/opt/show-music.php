 <?php

    $conn = new mysqli("localhost","root","","project");
    $data=$conn->query("SELECT * from music order by music_id DESC");
    while($row = $data->fetch_assoc()){

        $id = $row['music_id'];
        $music_name = $row['music_name'];
        $artist = $row['artist'];
        $url = $row['music_file'];
        
        echo "<tr>";
        echo "<td>".'<img src="data:image/jpeg;base64,'.base64_encode($row['music_cover'] ).'" height="200" width="200" class="img-thumnail music-pic" >  '."</td>";
        echo "<td>"."<a class='music' href='$url'> $music_name </a> <br>"."</td>";
        echo "<td>"."<a class='artist' href='artist.php?artist=$artist'> $artist </a> <br>"."</td>";
        echo "</tr>";

    }

?>