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
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 6px 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
    </style>
</head>
<body>
    <h1>Payment Details</h1>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $total_price = 0;
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
            foreach ($cartItems as $item) {
                $itemTotalPrice = $item['item_price'] * $item['quantity'];
                $total_price += $itemTotalPrice;
            ?>
                <tr>
                    <td><?= $item['item_name'] ?></td>
                    <td><img src="<?= $item['item_image'] ?>" alt="<?= $item['item_name'] ?>"></td>
                    <td><?= $item['item_price'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                </tr>
            <?php
            }
             ?>    
            <tr>
                <td colspan="2" style="text-align: right;">Total Price:</td>
                <td><?= $total_price ?></td>
            </tr>
        </tbody>
    </table>

    <form method="post" action="validate_payment.php">
        <label for="gcash_number">GCash Number:</label>
        <input type="text" id="gcash_number" name="gcash_number" required>
        <input type="hidden" id="total_price" name="total_price" value="<?= $total_price ?>">
        <br>
        <br>
        <button type="submit" name="proceed_to_payment">Proceed to Payment</button>
    </form>
</body>
</html>

<?php
require("include/footer.php");
?>
