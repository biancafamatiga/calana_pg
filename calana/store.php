<?php
    session_start();
    require("include/navbar.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Pokemon Go Calana</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap');
    

    html {
    font-size: 50.5%;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
    }

    
    
</style>

</head>
<body>

<!--Start Pokecoins-->
<h1> POKECOINS </h1>

<?php 
    $store_items = array(
        array(
            "item_name" => "Coin Handful",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/f/f0/Coin_Handful.png",
            "item_price" => "100"
        ),
        array(
          "item_name" => "Coin Stack",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/89/Coin_Stack.png",
          "item_price" => "550"
        ),
        array(
          "item_name" => "Coin Pouch",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/e/ed/Coin_Pouch.png",
          "item_price" => "1200"
        ),
        array(
          "item_name" => "Coin Bucket",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/10/Coin_Bucket.png",
          "item_price" => "2500"
        ),
        array(
          "item_name" => "Coin Box",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/a/ab/Coin_Box.png",
          "item_price" => "5200"
        ),
        array(
          "item_name" => "Coin Heap",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/a/a3/Coin_Heap.png",
          "item_price" => "14500"
        )
    );

    foreach ($store_items as $item) 
    $item_name = $item['item_name'];
    $item_image = $item['item_image'];
    $item_price = $item['item_price'];

    // Add to cart
    if (isset($_POST['additem'])) {
        $added_item = $_POST['item_id'];
        $_SESSION['cart'][] = $items[$selected_item]['item_name'];
    }
?>
<div class="container flex-1 w-80">
    <div class="items-section">
        <?php foreach ($store_items as $key => $item) { ?>
            <div class="item-container">
                <img class="images-items" src="<?= $item['item_image'] ?>" width="125" height="125">
                <div class="card-inner">
                    <h5><?= $item["item_name"] ?></h5>
                    <div class="card-price">
                        <img src="https://static.wikia.nocookie.net/pokemongo/images/8/89/PokeCoin.png" width="21" height="20"><?= $item["item_price"] ?>
                    </div>
                    <div class="add-cart">
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?= $key ?>">
                        <input type="submit" name="added_item" value="Add to Cart">
                    </form>
                     </div>
                </div>
            </div>
        <?php } ?>
        <div class="payment">
        <form method="post" action="payment.php">
                    <input type="hidden" name="item_id" value="<?= $key ?>">
                    <button type="submit" name="payment"> <a class="nav-link" href="payment.php"> Checkout </a></button>
                </form>
        </div>
    </div>
</div>

<!--End Pokecoins-->



</body>
</html>

<?php
    require("include/footer.php");
?>