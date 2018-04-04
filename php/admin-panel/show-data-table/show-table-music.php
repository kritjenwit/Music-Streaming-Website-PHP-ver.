<?php

    $page = $_GET['music-table'];

    if($page == "" || $page == "1"){
        $page1 = "0";
    }else{
        $page1 = ($page * 5)-5;
    }

    $conn = new mysqli("localhost","root","","project");
    $data=$conn->query("SELECT * from music limit $page1,5");
    while($row = $data->fetch_assoc()){

        $id = $row['music_id'];
        $music_name = $row['music_name'];
        $artist = $row['artist'];
        
        echo "<tr>";
        echo "<td>". $id . "</td>";
        echo "<td>". $music_name . "</td>";
        echo "<td>". $artist . "</td>";
        echo "<td>".'<img src="data:image/jpeg;base64,'.base64_encode($row['music_cover'] ).'" height="50" width="50" class="img-thumnail" />  '."</td>";
        echo "<td>". $row['music_file'] . "</td>";
        echo "</tr>";
    

}

?>