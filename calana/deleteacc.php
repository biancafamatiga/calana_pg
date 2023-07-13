<?php
    session_start();
    require("include/navbar.php");
    require_once("conn.php");

?>

<!-- delete account -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1> DELETE ACCOUNT </h1>
    DI KO ALAM PANO IDIDISPLAY DITO YUNG INFORMATION
    <div>
        <form method ="post" action="deletion.php">
        <br><br>
        Player ID <br> 
                        <div class ="pid">
                        <input name="pid1" id="pid1" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4" required>
                        -
                        <input name="pid2" id="pid2" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4"required>
                        -
                        <input name="pid3" id="pid4" type="text" class="form-control" placeholder="XXXX"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4"required>
                        </div>
    <div>
        <br><input type="password"  class="form-control" name="userpass" id="userpass" placeholder="Enter Password" required></p>
</div>
<div>
    <p > Are you sure that you want to delete you Pokemon GO Account? Please note that there is no option to restore the account or its data nor 
        the player id once it's deleted. If you click the button, your account will be completely deleted. 
<br>
<input type="submit" class="form-control" value="BACK" onclick="location='account.php' " >

        <input type="submit"  class="form-control" value="DELETE MY ACCOUNT">

</div>
    
</form>
</div>
</div>
</body>
</html>

<?php
require("include/footer.php");
?>