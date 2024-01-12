<?php include 'log.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton headhunters - HHS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-kz+5YiSSXF9VOXV54YrhIBmPqOS2gdsXOsSZhii+EoZld7Ugc5BlLYSBLgmrp9SHY4Gv4iZCxNqGxFe9LBc5Qg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1>HHS.</h1>
        </div>
        <div class="navbar-icons">
<!-- Replace this with your wallet button -->
<button type="button" onclick="window.location.href='wallet.html'">WALLET
    <i class="fas fa-user-circle"></i>
    <!-- If you want to include an image -->
    <!-- <img src="/images/application-wallet-pass.png" alt="Wallet"> -->
</button>

<!-- Replace this with your login button -->
<button type="button" onclick="window.location.href='admin.html'">ADMIN
    <i class="fas fa-sign-in-alt"></i>
    <!-- If you want to include an image -->
    <!-- <img src="/images/utilisateur.png" alt="Login"> -->
</button>

<!-- Logout button -->
<button type="button" id="logoutButton" onclick="logout()">LOGOUT
    <i class="fas fa-sign-in-alt"></i>
    <!-- If you want to include an image -->
    <!-- <img src="/images/se-deconnecter.png" alt="Logout"> -->
</button>



 <!-- Replace this with your signup icon -->
        </div>
    </nav>
    <h2>"DREAM COME TO REALITY"</h2>
    <div id="app">
       
        <div id="crypto-list"></div>
    </div>

    <script src="main.js"></script>
</body>
</html>
