<?php
    session_start();
    require_once('conn.php');

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $userpass = $_POST['password'];
        $query = "SELECT email FROM calana_users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $p_query = "SELECT password FROM calana_users WHERE email = '$email'";
        $p_result = mysqli_query($conn, $p_query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($p_result);
            $dbpass = $row['password'];

            if ($userpass === $dbpass) {
                // Password is correct
                header("Location: home.php");
            } else {
                // Password is incorrect
               $_SESSION['error_pass'] = "Invalid password credentials. Try Again.";
            }
        } else {
            // Email does not exist in the database
             $_SESSION['notfound_email'] = "Invalid email credentials. Try Again.";
        }
    if (isset($_SESSION['notfound_email']) || $_SESSION['error_pass']) {
         header("Location: login.php");
        }
    }
?>