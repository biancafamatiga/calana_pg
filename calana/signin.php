<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
    </style>


<body>
<div class="container" style="width: 30%; margin: auto;" id="form_login">

<form action="home.php" method="post">
<h3> SIGN IN </h3>
PLAYER ID: <input type="text" name="pid" class="form-control"><br>
PASSWORD: <input type="password" name="password"  class="form-control"><br>
<input type="checkbox" name="remember-me"> Remember me<br><br>

<input type="submit"  class="btn btn-primary"><br>
<?php
if (isset($_POST['remember-me'])) {
    $conn = mysqli_connect("localhost", "root", "", "t3famatiga");
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
    $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    setcookie("username", $uname, time() + (86400 * 30), "/");
    setcookie("password", $password, time() + (86400 * 30), "/");
  }
  
?>
</form>
</div>
</body>

</html>