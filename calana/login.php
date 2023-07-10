
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
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
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
        </style>

</head>
<body>

<div class="Section_top">
        <div class="content">
            <h1>LOGIN</h1>
        </div>
        
        <div class="container">
            <form action="validate_login.php" method="post" autocomplete="on">
            Email <br> 
            <input type="text" name="email" class="form-control"  placeholder="sample@gmail.com"><br>
            Password <br> 
            <input type="password" name="password" class="form-control"><br>
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