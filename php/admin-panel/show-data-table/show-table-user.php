<?php

    $page = $_GET['user-table'];

    if($page == "" || $page == "1"){
        $page1 = "0";
    }else{
        $page1 = ($page * 5)-5;
    }

    $get_all = $conn->query("SELECT * from encrypt_userinfo limit $page1,5");

    if($get_all->num_rows > 0){
        while($row = $get_all->fetch_assoc()){
            $decrypt_email = convert_string('d',$row['email']);
            $decrypt_password = convert_string('d',$row['password']);
            $decrypt_fname = convert_string('d',$row['firstname']);
            $decrypt_lname = convert_string('d',$row['lastname']);
        
            echo "<tr>";
            echo "<td>". $row['user_id'] . "</td>";
            echo "<td>". $decrypt_email . "</td>";
            echo "<td>". $decrypt_password . "</td>";
            echo "<td>". $decrypt_fname . "</td>";
            echo "<td>". $decrypt_lname . "</td>";
            echo "</tr>";
        }
    }

?>