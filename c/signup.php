<?php

session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    $playerid = $_POST['playerid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($playerid) && !empty($email) && !empty($password))
    {
        //saved to database
        $query = "insert into calana_table (playerid,email,password) values ('$playerid','$email','$password')";
        
        mysqli_query($conn,$query);

        header("Location: login.php");
        die;
    }else{
        echo "Please enter valid credentials.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="width: 30%; margin: auto;" id="form_login">
<form action="signup.php" method="post" autocomplete="on">
<h3> SIGN UP </h3>
Player ID <br> 
<input type="text" name="playerid" class="form-control" placeholder="#### #### ####"><br>
Email <br> 
<input type="text" name="email" class="form-control"  placeholder="sample@gmail.com"><br>
Password <br> 
<input type="password" name="password" class="form-control"><br>
Confirm Password <br> 
<input type="password" name="conpass" class="form-control"><br>
<input type="submit"  class="btn btn-primary"><br><br>

Already Registered? <a href="login.php"> Login </a>

</div>
    
</body>
</html>