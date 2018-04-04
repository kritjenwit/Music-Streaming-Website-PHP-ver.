<?php 

    $conn = new mysqli("localhost","root","","project");
    $data = $conn->query("SELECT distinct * from album");
    while($row = $data->fetch_assoc()){
        $artist = $row['artist'];
    
        echo "<option value='$artist'>$artist</option>";
    
    }

?>