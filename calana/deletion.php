<?php
session_start();
require("include/navbar.php");
require_once("conn.php");


$pid1 = $_POST['pid1'];
$pid2 = $_POST['pid2'];
$pid3 = $_POST['pid3'];
$playerId = $pid1 . '-' . $pid2 . '-' . $pid3;
$password = $_POST['userpass'];
$userID = $_SESSION['id'];

$query = "SELECT * FROM calana_users WHERE player_id = '$playerId' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $deleteQuery = "DELETE FROM calana_users WHERE player_id = '$playerId' AND password = '$password'";
    mysqli_query($conn, $deleteQuery);

    $deleteQueryTransaction = "DELETE FROM transactions WHERE user_ID = '$userID'";
    mysqli_query($conn, $deleteQueryTransaction);


    echo '<script>alert("Your account has been deleted successfully.");</script>';
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
   
    exit;
    
} else {
    echo '<script>alert("Invalid Player ID or password. Please try again.");</script>';
    echo '<meta http-equiv="refresh" content="0;url=deleteacc.php">';
    exit;
}


?>
