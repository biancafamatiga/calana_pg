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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        h2 {
            color: #666;
            text-align: center;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .form-control {
            width: 300px;
            height: 30px;
            margin-bottom: 10px;
            padding: 5px;
        }
        
        input[type="submit"] {
            width: 150px;
            height: 30px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1 style= "color:green" >CHANGE PASSWORD</h1>
        <h2>Player ID: <span><?= $_SESSION['player_id'] ?></span></h2>
        <div>
            <form method="post" action="validate_change.php">
                <br><br>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Current Email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
                <br><br>
                <p><input type="password" class="form-control" name="userpass" id="userpass" placeholder="Enter Current Password" required></p>
                <br><br>
                <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password" required>
                <br><br>
                <input type="password" class="form-control" name="connewpass" id="connewpass" placeholder="Confirm New Password" required></p>
        </div>
        <div>
            <input type="submit" class="form-control" value="BACK" onclick="location='account.php'">
            <input type="submit" class="form-control" value="SAVE CHANGES">
            </form>
        </div>
    </div>
</body>
</html>

<?php
require("include/footer.php");
?>
