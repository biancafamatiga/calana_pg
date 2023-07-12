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

<!--Start Items-->
<h1> STORE ITEMS </h1>

<?php 
    $store_items = array(
        array(
            "item_name" => "1x Incubator Limited",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/d/db/Incubator_Limited.png",
            "item_price" => "150"
        ),
        array(
          "item_name" => "1x Super Incubator",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/d/d5/Super_Incubator.png",
          "item_price" => "200"
        ),
        array(
          "item_name" => "1x Premium Battle Pass",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/87/Premium_Battle_Pass.png",
          "item_price" => "100"
        ),
        array(
          "item_name" => "3x Premium Battle Pass",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/87/Premium_Battle_Pass.png",
          "item_price" => "250"
        ),
        array(
          "item_name" => "1x Remote Raid Pass",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/13/Remote_Raid_Pass.png",
          "item_price" => "195"
        ),
        array(
          "item_name" => "3x Remote Raid Pass",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/13/Remote_Raid_Pass.png",
          "item_price" => "525"
        ),
        array(
          "item_name" => "1x Rocket Radar",
          "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/1c/Rocket_Radar.png",
          "item_price" => "200"
        ),
        array(
            "item_name" => "1x Poffin",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/6/63/Poffin.png",
            "item_price" => "100"
          ),
          array(
            "item_name" => "20x Poke Ball",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/87/Pok%C3%A9_Ball.png",
            "item_price" => "100"
          ),
          array(
            "item_name" => "100x Poke Ball",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/87/Pok%C3%A9_Ball.png",
            "item_price" => "460"
          ),
          array(
            "item_name" => "200x Poke Ball",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/8/87/Pok%C3%A9_Ball.png",
            "item_price" => "800"
          ),
          array(
            "item_name" => "1x Incense",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/1d/Incense.png",
            "item_price" => "40"
          ),
          array(
            "item_name" => "8x Incense",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/1d/Incense.png",
            "item_price" => "250"
          ),
          array(
            "item_name" => "1x Star Piece",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/6/6a/Star_Piece.png",
            "item_price" => "100"
          ),
          array(
            "item_name" => "8x Star Piece",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/6/6a/Star_Piece.png",
            "item_price" => "640"
          ),
          array(
            "item_name" => "10x Max Potion",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/0/03/Max_Potion.png",
            "item_price" => "200"
          ),
          array(
            "item_name" => "6x Max Revive",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/d/d0/Max_Revive.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "1x Lucky Egg",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/7/72/Lucky_Egg.png",
            "item_price" => "80"
          ),
          array(
            "item_name" => "8x Lucky Egg",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/7/72/Lucky_Egg.png",
            "item_price" => "500"
          ),
          array(
            "item_name" => "1x Glacial Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/1/16/Glacial_Lure_Module.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "1x Mossy Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/c/cc/Mossy_Lure_Module.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "1x Magnetic Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/5/56/Magnetic_Lure_Module.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "1x Rainy Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/5/53/Rainy_Lure_Module.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "1x Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/e/ea/Lure_Module.png",
            "item_price" => "180"
          ),
          array(
            "item_name" => "8x Lure Module",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/e/ea/Lure_Module.png",
            "item_price" => "680"
          ),
          array(
            "item_name" => "Bag Upgrade",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/a/a0/Bag_Upgrade.png",
            "item_price" => "200"
          ),
          array(
            "item_name" => "Pokemon Storage Upgrade",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/f/f6/Pok%C3%A9mon_Storage_Upgrade.png",
            "item_price" => "200"
          ),
          array(
            "item_name" => "Postcard Pages",
            "item_image" => "https://static.wikia.nocookie.net/pokemongo/images/9/9b/Postcard_Storage_Upgrade.png",
            "item_price" => "100"
          ),
          array(
            "item_name" => "10x Togedemaru Sticker",
            "item_image" => "https://www.serebii.net/pokemongo/stickers/328.png",
            "item_price" => "35"
          ),
          array(
            "item_name" => "10x Wartortle Sticker",
            "item_image" => "https://www.serebii.net/pokemongo/stickers/325.png",
            "item_price" => "35"
          ),
          array(
            "item_name" => "10x Axew Sticker",
            "item_image" => "https://www.serebii.net/pokemongo/stickers/319.png",
            "item_price" => "35"
          ),
          array(
            "item_name" => "10x Butterfree Sticker",
            "item_image" => "https://www.serebii.net/pokemongo/stickers/314.png",
            "item_price" => "35"
          ),
          array(
            "item_name" => "10x Pikachu Sticker",
            "item_image" => "https://www.serebii.net/pokemongo/stickers/209.png",
            "item_price" => "35"
          ),      
                
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

<!--End Items-->



</body>
</html>

<?php
    require("include/footer.php");
?>