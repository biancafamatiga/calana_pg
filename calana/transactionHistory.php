<?php
session_start();
require_once("conn.php");
require("include/navbar.php");

$userID = $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM transactions WHERE user_ID = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();
?>

<style>
table {
  width: 100%;
  border-style: solid;
  border-color: #6699CC;
  border-radius: 8px;
}

thead th {
  background-color: #6699CC;
}

th{
  color:white;
}

thead th,
tbody td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;

}


tbody tr:last-child td {
  border-bottom: none;
}

.no-transactions {
  font-style: italic;
  margin-top: 10px;
}

html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .page-content {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-right:40px;
            padding-left:40px;

        }

        .container {
            flex: 1;
            text-align: center;
            margin-top: 10px;
        }

        .footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            width: 100%;
            margin-top: auto; }

        .items-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333;
          }

</style>
<head>
<div class="page-content">
<h1 class="items-title">TRANSACTION HISTORY</h1>

        <div class="container">

<?php if ($result->num_rows > 0) : ?>
  <table>
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Gcash Number</th>
        <th>Total Price</th>
        <th>Item Name</th>
        <th>Date & Time</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['Gcash_num']; ?></td>
          <td><?php echo $row['total_price']; ?></td>
          <td><?php echo $row['item_name']; ?></td>
          <td><?php echo $row['date_created']; ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
<?php else : ?>
  <p class="no-transactions">No transactions yet.</p>
<?php endif; ?>

</div>
        <footer class="footer">
            <?php require("include/footer.php"); ?>
        </footer>
    </div>
</body>
</html>