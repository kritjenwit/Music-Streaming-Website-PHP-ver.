<?php 

    $conn = new mysqli("localhost","root","","project");
    $data = $conn->query("SELECT distinct * from album GROUP BY album_name order by album_id DESC ");
    
    while($row = $data->fetch_assoc()){

        $album = $row['album_name'];
        $artist = $row['artist'];
        $url = $row['album_file'];

        echo "<div class='col-lg-3 col-md-6 col-sm-6 py-2'>";
        echo    "<div class='img-container'>";
        echo        "<a id='' href='$url'>";
        echo            '<img src="data:image/jpeg;base64,'.base64_encode($row['album_cover'] ).'" class="img-thumnail" />  ';
        echo        "</a>";
        echo        "<div class='overlay'>";
        echo            "<div class='text'>";
        echo                "<a href='album.html?album=$album&artist=$artist' id='pic-song'>$album - $artist</a>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo '</div>';

    }

?>
    
    
        
           
       
   
