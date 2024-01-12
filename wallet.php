<?php include 'log.php';

require_once('connect.php');

$sql="SELECT balance FROM wallet WHERE id = :id_user";
$id_user = $_SESSION['id'];

$stmt = $bdd->prepare($sql);
$stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
$stmt->execute();

// Recuperation de resultat 
$resultat = $stmt->fetch(PD0::FETCH_ASSOC);

//Fermeture de la base
$bdd = null;

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
            <p id="balance">Loading...</p>
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
