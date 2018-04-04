<?php

$page = $_GET['album-table'];

if($page == "" || $page == "1"){
    $page1 = "0";
}else{
    $page1 = ($page * 5)-5;
}

    $conn = new mysqli("localhost","root","","project");
    $data=$conn->query("SELECT * from album group by album_name order by album_id ASC limit $page1,5");
    while($row = $data->fetch_assoc()){

        $id = $row['album_id'];
        $album_name = $row['album_name'];
        $artist = $row['artist'];
        
        echo "<tr>";
        // echo "<td>". $id . "</td>";
        echo "<td>". $album_name . "</td>";
        echo "<td>". $artist . "</td>";
        echo "<td>".'<img src="data:image/jpeg;base64,'.base64_encode($row['album_cover'] ).'" height="50" width="50" class="img-thumnail" />  '."</td>";
        echo "</tr>";
    

}

?>