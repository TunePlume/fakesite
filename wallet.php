<?php 
require_once('connect.php');

include('log.php');

//Recuperer l'ID de l'utilisateur connecte
$user_id = $_SESSION['id'];

//Recuperer la balance de l'utilisateur a partir de la base de donnee
$sql = "SELECT balance FROM wallet WHERE user_id = :user_id";
$stmt = $co->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$balance = $stmt->fetchColumn();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton headhunters - HHS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>



    <div class="wallet-container">
        <h2 id="wallet-heading">My Wallet</h2>
        <div class="balance">
            <p>Current Balance: </p>
            <p id="balance"><?php echo $balance; ?></p>
        </div>
        <div class="transaction-history">
            <h3>Transaction History</h3>
            <ul id="transaction-list">
                <!-- Transaction history will be populated dynamically -->
            </ul>
        </div>
    </div>

    
</body>
</html>
