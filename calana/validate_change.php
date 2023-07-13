<?php
require_once('conn.php');
require_once('fetch.php');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['newpass']) && isset($_POST['newconpass']) ) {
    $email = $_POST['email'];
    $userpass = mysqli_query($conn, "SELECT password FROM calana_users WHERE email = '$email'");
    foreach ($userpass-> fetch_array () as $x => $y){
        $row[$x] = $y;
    };

    $userpass = $_POST['password'];
    $newpass = $_POST['newpass'];
    $newconpass = $_POST['newconpass'];

    if ($password == $newpass) {
        echo "This is already your existing password. Try again.";
    } elseif ($password != $y) {
        echo "Incorrect password.";
    } elseif ($newpass != $newconpass) {
        echo "Passwords didn't match. Try again.";
    } elseif ($newpass == $newconpass) {
        $query = "UPDATE calana_users SET pass = '$newpass' WHERE email = '$email'";
        $result = $conn->query($query);
        if($result){
            echo "Changes were successfully saved.";
            header("Location: account.php");
        } else {
            echo "Changes failed.";
        }
    }}
?>