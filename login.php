<?php include 'log.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton headhunters - HHS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

$error_msg = ""; // Initialisation de la variable

try {
    $bdd = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo *Connexion réussie
} catch (PDOException $e) {
    echo "Erreur : ", $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if ($email != "" && $pass != "") {
        // connexion a la bdd
        $req = $bdd->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
        $req->execute([$email, $pass]);
        $rep = $req->fetch();

        if ($rep != false) {
            // Authentification réussie, définir la variable de session
            $_SESSION['id'] = $rep['id']; // Vous pouvez utiliser un identifiant d'utilisateur réel ici

            if ($_POST['email'] == "root@admin.com") {
                header("location: affichage.php");
            } else {
                header("location: index.php");
                exit();
            }
        } else {
            $error_msg = "Email ou mot de passe incorrect";
        }
    }
}
?>

<div class="auth-container">
    <h2>Welome back to HHS.</h2>
    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Entrez votre Email" id="email" required autocomplete="off">
        <br/>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" placeholder="Entrez votre Mot de passe" id="pass" required>
        <input type="submit" value="Se connecter" name="submit">
    </form>
    <p>Don't have an account? <a href="inscription.php">SIGN-UP</a></p>
</div>

<?php
if ($error_msg) {
    ?>
    <p><?php echo $error_msg; ?> </p>
    <?php
}
?>

</body>
</html>
