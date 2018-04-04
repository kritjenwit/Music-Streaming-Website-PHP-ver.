<?php

$conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT count(user_id) from encrypt_userinfo");
    
    while ($row = $data->fetch_array()) {
        $no_row = ($row['0']/5)+1;
        
        for($b=1;$b<=$no_row;$b++){
            ?> <li name="page" class="page-item"><a href="?user-page=<?php echo $b ?>#user-table" class="page-link"> <?php echo $b ?> </a></li> <?php 
        }
    }

?>