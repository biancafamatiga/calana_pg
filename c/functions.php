<?php

function check_login($conn)

{
    if(isset($_SESSION['playerid']))
    {
        $id = $_SESSION['playerid'];
        $query = "select * from calana_table where playerid = '$id' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
        
    }

    header("Location: login.php");
    die;
}

