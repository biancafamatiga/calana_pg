<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMON GO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
    </style>

<body>
<?php
session_Start();
$_SESSION['password'] = null;
$_SESSION['cpassword'] = null;
//db = t3famatiga
//table = t3_table
?>
<div class="container" style="width: 30%; margin: auto;" id="form_login">
<form action="1_reg.php" method="post" >
<h3> SIGN UP </h3>
Player ID <br> 
<input type="text" name="pid" class="form-control" placeholder="#### #### ####"><br>
Email <br> 
<input type="text" name="email" class="form-control"  placeholder="sample@gmail.com"><br>
Password <br> 
<input type="password" name="password" class="form-control"><br>
Confirm Password <br> 
<input type="password" name="conpass" class="form-control"><br>

<input type="submit" id="bt" class="btn btn-primary"><br>
</div>
<br>
<div class="container" style="width: 30%; margin: auto;" id="form_login">

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['password'])) {
      $_SESSION['password'] = $_POST['password'];
      $conn = mysqli_connect("localhost", "root", "", "t3famatiga");
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$bday = mysqli_real_escape_string($conn, $_REQUEST['bday']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
$sql = "INSERT INTO t3_table (firstname,middlename,lastname,username,password,birthday,email,contact)
VALUES('$fname','$mname','$lname','$uname','$password','$bday','$email','$contact');";
if(mysqli_query($conn, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
if ($_REQUEST['password'] != $_REQUEST['conpass']) {
        echo "Passwords do not match";
} 
else { ?>
   
    <b> <p name = "pid"> Player ID: </b><?php echo $_REQUEST['pid']; ?></p>
    <b><p name = "email"> Email: </b> <?php echo $_REQUEST['email']; ?></p>
    <b><p name = "password"> Password: </b><?php echo $_REQUEST['password']; ?></p>
  
   
<?php
}
?>

<?php
mysqli_close($conn);
    } else {
      echo "Password is not set.";
    }
  
}
?>

<form >
Already Registered?
<input type="button" id="bt" class="btn btn-primary" value="Login" onclick="location='signin.php' " />
</div>

</form>

</body>
</html>