<?php
    session_start();
    require("include/navbar.php");
    require_once("conn.php");

?>

<!-- edit profile -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1> CHANGE PASSWORD </h1>
    DI KO ALAM PANO IDIDISPLAY DITO YUNG INFORMATION
    <div>
        <form method ="post" action="validate_change.php">
        <br><br>
        <input type="text" class="form-control" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
        <br><br>
        <p><input type="password" class="form-control" name="userpass" id="userpass" placeholder="Enter Current Password" required></p>
        <br><br>
        <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password" required>
        <br><br>
        <input type="password" class="form-control" name="connewpass" id="connewpass" placeholder="Confirm New Password" required></p>
</div>
<div>
    
    <input type="submit" class="form-control" value="BACK" onclick="location='account.php' " >
    <input type ="submit" class="form-control" value="SAVE CHANGES">
</form>
</div>
</div>
</body>
</html>

<?php
require("include/footer.php");
?>