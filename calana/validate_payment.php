<?php
session_start();
require_once('conn.php');

if (isset($_POST['proceed_to_payment'])) {
    $gcash_number = $_POST['gcash_number'];
    $total_price = $_POST['total_price'];
    $cart_data = $_SESSION['cart'];
    $userID = $_SESSION['id'];

    $item_names = implode(', ', array_column($cart_data, 'item_name'));
  
    $stmt = $conn->prepare("INSERT INTO transactions (user_ID, Gcash_num, total_price, item_name) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("isis", $userID, $gcash_number, $total_price, $item_names);
    $success = $stmt->execute();
    
    $stmt->close();
    
   
    if ($success) {
       

        echo '<script>alert("Transaction data inserted successfully!");</script>';
        unset($_SESSION['cart']);
        echo '<meta http-equiv="refresh" content="0;url=home.php">';
    
        exit;
    } else {
      
        echo '<script>alert("Failed to insert transaction data!");</script>';
        echo '<meta http-equiv="refresh" content="0;url=payment.php">';
        exit;
    }
    
}

?>
