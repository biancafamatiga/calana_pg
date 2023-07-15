<?php
    session_start();
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Pokemon Go Calana</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap');
    

    html {
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
    }


    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 800px;
    margin: 0 auto;
  }

  .items-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
  }


  .item-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 200px;
    padding: 10px;
    background-color: #f5f5f5;
    border-radius: 15px;
  }

  .images-items {
    width: 125px;
    height: 125px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .card-inner {
    margin-bottom: 10px;
  }

  .card-price {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .add-cart {
    margin-top: 10px;
  }

  .checkout-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.items-title {
  text-align: center;
  margin-top: 20px;
  font-size: 24px;
  color: #333;
}
.checkout-button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ec994b;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}



.item-container:hover {
  transform: scale(1.1);
  background-color: #eaf0ff; 
}


.images-items {
  width: 125px;
  height: 125px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 10px;
}

.card-inner {
  margin-bottom: 10px;
}

.card-price {
  display: flex;
  align-items: center;
  justify-content: center;
}

.add-cart {
  margin-top: 10px;
}

.checkout-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.checkout-button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ec994b;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.items-title {
  text-align: center;
  margin-top: 20px;
  font-size: 24px;
  color: #333;
}

.add-cart input[type="submit"] {
  margin-top: 10px;
  padding: 8px 16px;
  font-size: 10px;
  background-color: #5D76A9; 
  color: #fff;
  border: none;
  border-radius: 20px;  
  cursor: pointer;
}
    

</style>

</head>
<body>

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
    // if (isset($_POST['additem'])) {
    //     $added_item = $_POST['item_id'];
    //     $_SESSION['cart'][] = $items[$selected_item]['item_name'];
    // }

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
  }
  
  if (isset($_POST['additem'])) {
      $added_item = $_POST['item_id'];
      $item = array(
          'item_name' => $store_items[$added_item]['item_name'],
          'item_image' => $store_items[$added_item]['item_image'],
          'item_price' => $store_items[$added_item]['item_price']
      );
      $_SESSION['cart'][] = $item;
  }
  require("include/navbar.php");

?>

<div class="container flex-1 w-80">
    <h1 class="items-title">STORE ITEMS</h1>
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
                        <input type="hidden" name="item_image" value="<?= $item['item_image'] ?>">

                            <input type="hidden" name="item_id" value="<?= $key ?>">
                            <input type="submit" name="additem" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="checkout-container">
        <form method="post" action="cart.php">
            <button type="submit" name="payment" class="checkout-button">Checkout</button>
        </form>
    </div>
</div>
</div>


<!--End Items-->
<br><br>


</body>
</html>

  <?php
    require("include/footer.php");
  ?>