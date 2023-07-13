<?php
    session_start();
    require_once("conn.php");

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMON GO CALANA</title>
    <link rel="stylesheet" href="style.css">

    <style>

    body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}
@media screen and (max-width: 768px) {
            .sign-up-container {
                width: 90%;
                right: auto;
                top: 20px;
            }

            h1 {
                right: 0;
                bottom: 0;
            }

            input[type=text], input[type=password] {
                width: 100%;
            }
        }
.sign-up-container {
    backdrop-filter: blur(10px);
	background-color: rgba(255, 255, 255, 0.2); 
	border-radius: 20px;
	padding: 10px;
	width: 700px;
	margin: 0 auto;
    position:relative; right:200px; top:80px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1); 
}
input[type=text]{
   width: 20%%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #e6e2d3;
  border-radius: 10px;
  box-sizing: border-box;
  background-color: rgba(255, 255, 255, 0.5); 
  

}
input[type=text], [type=password] {
    width: 20%%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #e6e2d3;
  border-radius: 10px;
  box-sizing: border-box;
  background-color: rgba(255, 255, 255, 0.5); 
}

input[type=submit] {
  width: 200px;
  background-color: #5072A7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type=button] {
  background-color: #5072A7;
  color: white;
  padding: 7px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  opacity:0.7;
}

input[type=submit]:hover {
  background-color:#5F9EA0 ;
}

input[type=button]:hover {
  background-color:#5F9EA0 ;
}

.Section_top{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background-image: url(img/pikachu.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    justify-content: center;
    animation: change 10s infinite ease-in-out;
}
.content{
    position: center;
    top: 50%;
    left: 50%;
    text-transform: uppercase;

}
h1{
    color: #fff;
    font-size: 60px;
    letter-spacing: 15px;
}
.content h1{
    color: #fff;
    font-size: 60px;
    letter-spacing: 15px;
    
}
.content h1 span{
    color: #111;
}
.content a{
    background: #85c1ee;
    padding: 10px 24px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 20px;
}
.content a:hover{
    background: #034e88;
    color: #fff;
}


@keyframes change{
    0%
    {
        background-image: url(img/pikachu.png);
    }
    20%
    {
        background-image: url(img/squirtle.png);
    }
    40%
    {
        background-image: url(img/jigglypuff.png);
    }
    60%
    {
        background-image: url(img/dratini.png);
    }
    80%
    {
        background-image: url(img/bulbasur.png);
    }
    100%
    {
        background-image: url(img/pikachu.png);
    }
}
        </style>

</head>
<body>

<div class="Section_top">
            <div class = "sign-up-container">
                <div class="content">
                        <h1>SIGN UP</h1>
                     </div>
                <div class="container">
                    
                    <form action="validate_signup.php" method="post" autocomplete="on">
                    Player ID <br> 
                        <div class ="pid">
                        <input name="pid1" id="pid1" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4" required>
                        -
                        <input name="pid2" id="pid2" type="text" class="form-control" placeholder="XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4"required>
                        -
                        <input name="pid3" id="pid4" type="text" class="form-control" placeholder="XXXX"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="4" maxlength="4"required>
                        </div>
                    Email <br> 
                    <input type="text" name="email" class="form-control"  placeholder="sample@gmail.com"><br>
                    Password <br> 
                    <input type="password" name="password" class="form-control"><br>
                    Confirm Password <br> 
                    <input type="password" name="conpass" class="form-control"><br>

                    <?php
                                if (isset($_SESSION['existing_email'])) :
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                    if (isset($_SESSION['existing_email'])) :
                                        echo $_SESSION['existing_email'];
                                        unset($_SESSION['existing_email']);
                                    endif;
                                ?>
                            </div>
                            <?php
                                endif;
                                if (isset($_SESSION['error_email'])) :
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                    if (isset($_SESSION['error_email'])) :
                                        echo $_SESSION['error_email'];
                                        unset($_SESSION['error_email']);
                                    endif;
                                ?>
                            </div>
                            <?php
                                endif;
                                if (isset($_SESSION['error_conpass'])) :
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                    if (isset($_SESSION['error_conpass'])) :
                                        echo $_SESSION['error_conpass'];
                                        unset($_SESSION['error_conpass']);
                                    endif;
                                ?>
                            </div>
                            <?php
                                endif;
                            ?>

                    <input type="submit"  class="btn btn-primary" value="Sign Up"><br>

                    Already Registered?
                    <input type="button" id="bt" class="btn btn-primary" value="Login" onclick="location='login.php' " />
                </div>
   
    
            </div> 
</div>
    
</body>
</html>
<?php 
    require("include/footer.php");
?>
