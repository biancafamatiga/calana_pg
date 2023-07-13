<?php
    session_start();
    require("include/navbar.php");
    require_once("conn.php");

?>

<!-- user profile -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1> USER PROFILE </h1>
    DI KO PA ALAM PANO IDIDISPLAY DITO YUNG USER INFO 
    <br>
    <input type="submit" class="form-control" value="CHANGE PASSWORD" onclick="location='changepass.php' " >
    <input type="submit" class="form-control" value="DELETE ACCOUNT" onclick="location='deleteacc.php' " >

</body>
</html>

<?php
require("include/footer.php");
?>