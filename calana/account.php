<?php
    session_start();
    require("include/navbar.php");
    require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
            border-color:black;
            border-style: solid;
            width:50%;
            margin:auto;
            border-radius:25px;
       

        }
        
        .profile-info {
            margin-top: 30px;
        }
        
        .profile-info h2 span {
            color: blue;
        }
        
        .profile-info h2:nth-child(2) span {
            color: green;
        }
        
        .profile-info h2:nth-child(3) span {
            color: red;
        }
        
        .profile-actions {
            margin-top: 20px;
            
        }
        
        .profile-actions input[type="submit"] {
            
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition-duration: 0.4s;
        }
      
         html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .page-content {
            min-height: 85vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            text-align: center;
            margin-top: 50px;
            border-radius: 50px;
            width: 500px; 
            height: 300px;
            background-color: rgba(148, 198, 238, 0.15); 
            padding: 20px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1); 
            border-color: rgba(148, 198, 238, 0.15);
            
         }


        .footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        .items-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333;
          }

        #delete_btn {
            border-radius: 30px;
            border-color: #ff8080;
            border-style: solid;
            color: #ff8080;
            font-weight:500;
            font-size:13px;
        }
        

        #delete_btn:hover {
            border-radius: 30px;
            color:white;
            background-color:#ff8080;
            font-weight:500;
            font-size:13px;
        }

        #change_btn {
            border-radius: 30px;
            border-color:  #00e64d;
            border-style: solid;
            color:  #00e64d;
            font-weight:500;
            font-size:13px;
        }
        

        #change_btn:hover {
            border-radius: 30px;
            color:white;
            background-color: #00e64d;
            font-weight:500;
            font-size:13px;
        }

    </style>
</head>
<body>
       <div class="page-content">
        <div class="container">
 
        <h1 class="items-title">USER PROFILE</h1>
        <div class="profile-info">
            <h2>ID: <span><?= $_SESSION['id'] ?></span></h2>
            <h2>Player ID: <span><?= $_SESSION['player_id'] ?></span></h2>
            <h2>Email: <span><?= $_SESSION['email'] ?></span></h2>
        </div>
        <div class="profile-actions">
            <input type="submit" id="change_btn" class="form-control" value="Change Password" onclick="location='changepass.php'">
            <input type="submit" id="delete_btn" class="form-control" value="Delete Account"  onclick="location='deleteacc.php'">
        </div>
    </div>
        </div>
        <footer class="footer">
            <?php require("include/footer.php"); ?>
        </footer>
    </div>
    </div>
</body>
</html>

