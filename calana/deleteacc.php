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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
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
            margin-top: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div>
        <h1 style="color:red">DELETE ACCOUNT</h1>
        <h2>ID: <span><?= $_SESSION['id'] ?></span></h2>
        <h2>Player ID: <span><?= $_SESSION['player_id'] ?></span></h2>
        <h2>Email: <span><?= $_SESSION['email'] ?></span></h2>
        <div>
            <form method="post" action="deletion.php">
                <br><br>
                <div style="text-align: center;">
                    Player ID <br> 
                    <div class="pid">
                        <input name="pid1" id="pid1" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4" required>
                        -
                        <input name="pid2" id="pid2" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4" required>
                        -
                        <input name="pid3" id="pid4" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4" required>
                    </div>
                </div>
                <div style="text-align: center;">
                    <br><input type="password" class="form-control" name="userpass" id="userpass" placeholder="Enter Password" required>
                </div>
                <div style="text-align: center;">
                    <p>Are you sure that you want to delete your Pokemon GO Account? Please note that there is no option to restore the account or its data nor the player id once it's deleted. If you click the button, your account will be completely deleted.</p>
                    <br>
                    <input type="submit" class="form-control" value="BACK" onclick="location='account.php'">
                    <input type="submit" class="form-control"  style="background-color:red" value="DELETE MY ACCOUNT">
                </div>
            </form>
        </div>
    </div>
</body>
</html>


<?php
    require("include/footer.php");
?>
