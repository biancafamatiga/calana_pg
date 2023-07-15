<?php
session_start();
require("include/navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>


        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-right:60px;
            padding-left:60px;        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #777;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .remove-button {
            padding: 6px 10px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        .remove-button:hover {
            background-color: #d32f2f;
        }
        
        .content {
            flex: 1;
        }

        .proceed_btn{
            border-radius: 30px;
            float:right;
            border-color:#3CB371;
            border-style: solid;
            color:#3CB371;
            background-color:white;
            font-weight:500;
            width:20%;
            font-size:13px;
        }

        .proceed_btn:hover{
            border-radius: 30px;
            float:right;
            background-color:#3CB371;
            color:white;
            font-weight:500;
            font-size:13px;
            width:20%;
        }

        .remove_btn{
            border-radius: 30px;
            float:right;
            border-color:#B22222;
            border-style: solid;
            color:#B22222;
            background-color:white;
            font-weight:500;
            font-size:13px;
        }
        

        .remove_btn:hover {
            border-radius: 30px;
            float:right;
            color:white;
            background-color:#B22222;
            font-weight:500;
            font-size:13px;
        }

        .div_proceed{
            padding:20px;
        }

        .div_remove{
            position: absolute;
            margin:auto;
        }

        .items-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333;
            }

        
    </style>
</head>
<body>
<div class="container">
        <div class="content">
        <h1 class="items-title">MY CART</h1>
    <?php
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo "<p>Your cart is empty. Please add items to your cart.</p>";
    } else {
    ?>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $cartItems = array();
                foreach ($_SESSION['cart'] as $item) {
                    $itemName = $item['item_name'];
                    $itemImage = $item['item_image'];
                    $itemPrice = $item['item_price'];
                    $itemQuantity = isset($cartItems[$itemName]) ? $cartItems[$itemName]['quantity'] + 1 : 1;
                    $cartItems[$itemName] = array(
                        'item_name' => $itemName,
                        'item_image' => $itemImage,
                        'item_price' => $itemPrice,
                        'quantity' => $itemQuantity
                    );
                }

                foreach ($cartItems as $item) { ?>
                    <tr>
                        <td><?= $item['item_name'] ?></td>
                        <td><img src="<?= $item['item_image'] ?>" alt="<?= $item['item_name'] ?>"></td>
                        <td><?= $item['item_price'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="item_name" value="<?= $item['item_name'] ?>">
                                <div class="div_remove">
                                <button class="remove_btn" type="submit" name="remove_item" class="remove-button">Remove</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        if (isset($_POST['remove_item'])) {
            $removed_item_name = $_POST['item_name'];
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['item_name'] === $removed_item_name) {
                    unset($_SESSION['cart'][$key]);
                    break;
                }
            }
            echo '<meta http-equiv="refresh" content="0;url=cart.php">';
          
        }
        ?>

        <form method="post" action="payment.php">
            <div class="div_proceed">
            <button class="proceed_btn" type="submit" name="proceed_to_payment">PROCEED TO PAYMENT</button>
            </div
        </form>
    <?php } ?>
    </div>
        <?php
        require("include/footer.php");
        ?>
</div>
</body>
</html>

