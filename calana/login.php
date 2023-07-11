
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
.box {
  width: 500px; 
  height: 400px;
  background-color: rgba(255, 255, 255, 0.2); 
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 30%;
  transform: translate(-50%, -50%);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1); 
}
 body,html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
    overflow-x: hidden; 
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
    text-align: center;
    top: 50%;
    left: 50%;
    text-transform: uppercase;

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



.container {
  width: 400px;
  margin: 0 auto;
}

.container1 {
  margin: 0 auto;
}


h2 {
  text-align: center;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #e6e2d3;
  border-radius: 10px;
  box-sizing: border-box;
  background-color: rgba(255, 255, 255, 0.5); 
}

input[type=password] {
  width: 100%;
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
  background-color: rgba(73, 98, 158, 0.5); 
  
}

input[type=submit]:hover {
  background-color:#5F9EA0 ;
}

        </style>

</head>
<body>

<div class="Section_top">
    <div class="box">
        <div class="content">
            <h1>LOGIN</h1>
        </div>
        
        <div class="container">
            <form action="validate_login.php" method="post" autocomplete="on">
            Email <br> 
            <input type="text" name="email" class="form-control"  placeholder="sample@gmail.com"><br>
            Password <br> 
            <input type="password" name="password" class="form-control"><br></div>
            <div>
            <?php
                        if (isset($_SESSION['notfound_email'])) :
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                            if (isset($_SESSION['notfound_email'])) :
                                echo $_SESSION['notfound_email'];
                                unset($_SESSION['notfound_email']);
                            endif;
                        ?>
                    </div>
                    <?php
                        endif;
                        if (isset($_SESSION['error_pass'])) :
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                            if (isset($_SESSION['error_pass'])) :
                                echo $_SESSION['error_pass'];
                                unset($_SESSION['error_pass']);
                            endif;
                        ?>
                    </div>
                    <?php
                        endif;
                    ?>
                    </div>

            <input type="submit"  class="btn btn-primary" value="Login"><br>
    </div> 
</div>
    
</body>
</html>
<?php 
    require("include/footer.php");
?>