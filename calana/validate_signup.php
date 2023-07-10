<?php
    session_start();
    require_once('conn.php');
        $email = $_POST['email'];
        $userpass = $_POST['password'];    
        $conpass = $_POST['conpass'];
        $pid1 = $_POST["pid1"];
        $pid2 = $_POST["pid2"];
        $pid3 = $_POST["pid3"];
        $player_id = "$pid1-$pid2-$pid3";
        $query = "SELECT email FROM calana_users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['existing_email'] = "This email already exists. Try Again.";
            } 

            if (!preg_match("/^([a-zA-Z]+[a-zA-Z0-9_\.]*[a-zA-Z0-9]+)@(gmail|yahoo|icloud).com$/", $_POST['email'])) {
                $_SESSION['error_email'] = "Invalid Email. Try Again.";
            }
            if ($userpass != $conpass){
                $_SESSION['error_conpass'] = "Password didn't match. Try Again.";
            }

            


    if (isset($_SESSION['invalid_email']) || isset($_SESSION['error_pass']) || isset($_SESSION['error_email'])) {
         header("Location: signup.php");
        }
    else{
        // INSERT USER CREDENTIALS IN THE DATABASE
        $insertQuery = "INSERT INTO calana_users (player_id, email, password) VALUES ('$player_id', '$email', '$userpass')";
        $insertResult = $conn->query($insertQuery);


    // QUERY IS SUCCESSFUL
            if(!$result){
                die("Query failed: " . $conn->error);
            }else{
                // LOGIN
                header("Location: login.php");
                exit();
            }
        }

?>
