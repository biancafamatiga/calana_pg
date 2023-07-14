<!--Header/Navbar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<style>
  .nav-link {
    color: inherit;
    text-decoration: none;
  }

  .nav-link {
    background:
      linear-gradient(
        to right,
        rgba(255, 255, 255, 1),
        rgba(255, 255, 255, 1)
      ),
      linear-gradient(
        to right,
        rgba(255, 0, 0, 1),
        rgba(255, 0, 180, 1),
        rgba(0, 100, 200, 1)
    );
    background-size: 100% 3px, 0 3px;
    background-position: 100% 100%, 0 100%;
    background-repeat: no-repeat;
    transition: background-size 250ms;
  }

  .nav-link:hover {
    background-size: 0 3px, 100% 3px;
  }

  #nav{
    display: grid;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;
    height: 15vh;
    place-items: center;
    padding-left:10px;


  }

  #navs1,#navs2,#navs3{
      margin-left:120px;
      padding:3px;
  }

  #navs4,#navs5{
      margin-left:120px;
      padding:3px;
  }
  #navbarNavAltMarkup {
  justify-content: flex-end;
  align-items: flex-start;
}



</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <div class="container-fluid">
      <span class="navbar-toggler-icon"></span>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="navbar-brand" href="home.php"> <img src="https://logos-download.com/wp-content/uploads/2016/07/Pok%C3%A9mon_Go_logo.png" width="105" height="55"></a>
      <a class="nav-link " aria-current="page" href="home.php"  id="navs1">HOME</a>
      <a class="nav-link" href="store.php"  id="navs2">STORE</a>
      <a class="nav-link" href="about.php" id="navs3">ABOUT US</a>
      <a class="nav-link" href="cart.php" id="navs4"> MY CART </a>
      <a class="nav-link" href="account.php" id="navs5"> ACCOUNT </a>
      </div>
     
    </div>
  </div>
</nav>
</body>
</html>
