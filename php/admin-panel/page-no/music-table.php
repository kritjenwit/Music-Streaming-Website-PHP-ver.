<?php

$conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT count(music_id) from music");
    
    while ($row = $data->fetch_array()) {
        $no_row = ($row['0']/5)+1;
        
        for($b=1;$b<=$no_row;$b++){
            ?> <li name="page" class="page-item"><a href="?user-table=1&music-table=<?php echo $b ?>&album-table=1#music-table" class="page-link"> <?php echo $b ?> </a></li> <?php 
        }
    }

?>