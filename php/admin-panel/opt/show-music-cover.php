<?php 

    $conn = new mysqli("localhost","root","","project");

    $data = $conn->query("SELECT * from music");

    if($data->num_rows > 0 ){
        while($row = $data->fetch_assoc()){
           
            echo "<tr>";
            echo "<td>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['music_cover'] ).'" height="200" width="200" class="img-thumnail" />  ';
            echo "</td>";
            echo "</tr>";

        }
    }

?>