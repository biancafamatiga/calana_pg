<?php
    session_start();
    if(isset($_POST['btnlogin'])):
        $playerid = $_POST['playerid'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "password"):
            $_SESSION['username'] = $username;
            $_SESSION['islogged'] = true;
            header("Location: welcome.php");
        else:
            $_SESSION['error'] = "Invalid username or password";
            header("Location: login.php");
        endif;
    endif;
?>