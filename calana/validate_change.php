<?php
require_once('conn.php');
require_once('fetch.php');

if (isset($_POST['email']) && isset($_POST['userpass']) && isset($_POST['newpass']) && isset($_POST['connewpass'])) {
    $email = $_POST['email'];
    $password = $_POST['userpass'];
    $newpass = $_POST['newpass'];
    $newconpass = $_POST['connewpass'];

    $userpass = mysqli_query($conn, "SELECT password FROM calana_users WHERE email = '$email'");
    $row = $userpass->fetch_array();
    $dbPassword = $row['password'];

    if ($password == $newpass) {
        echo '<script>alert("This is already your existing password. Try again.");</script>';
        echo '<meta http-equiv="refresh" content="0;url=changepass.php">';
    } elseif ($password != $dbPassword) {
        echo "Incorrect password.";
        echo '<meta http-equiv="refresh" content="0;url=changepass.php">';
    } elseif ($newpass != $newconpass) {
        echo "Passwords didn't match. Try again.";
        echo '<meta http-equiv="refresh" content="0;url=changepass.php">';
    } else {
        $query = "UPDATE calana_users SET password = '$newpass' WHERE email = '$email'";
        $result = $conn->query($query);
        if ($result) {
            echo '<script>alert("Password have changed successfully!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=logout.php">';
            exit();
        } else {
            echo '<script>alert("Password was not changed successfully!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=changepass.php">';
        }
    }
}
?>
