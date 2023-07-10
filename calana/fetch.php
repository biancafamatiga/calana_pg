<?php 
    require_once('conn.php');
    $query = "SELECT * FROM calana_users";

    $result = $conn->query($query);

    if(!$result){
        die ("Query failed: " . $conn->error);
    } else {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
?>