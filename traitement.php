<?php
$servername = "localhost";
$username = "root";
$password = ""; 

try{
    $bdd = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo *Connexion réussie
}
catch(PDOException $e){
    echo "Erreur : ", $e->getMessage();
}

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    try{

    $requete = $bdd->prepare("INSERT INTO users VALUES (NULL, :nom, :prenom, :email, :pass)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "pass" => $pass

        )
    );
    //Recuperer l'ID de l'user nouvellement inscrit
    $user_id = $bdd->lastInsertId();

    //Inserer l'utilisateur dans la table wallet avec balance initiale a 0
    $sqlInsertWallet = "INSERT INTO wallet (user_id, user, balance) VALUES (:user_id, :prenom, 0)";
    $stmInsertWallet = $bdd->prepare($sqlInsertWallet);
    $stmInsertWallet->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmInsertWallet->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmInsertWallet->execute();

    header("Location: wallet.php");
    } catch(PDOException $e){
        echo "Erreur : ", $e->getMessage();
    }
}

?>



//Recuperer l'ID de l'user nouvellement inscrit
    $user_id = $pdo->lastInsertId();

    //Inserer l'utilisateur dans la table wallet avec balance initiale a 0
    $sqlInsertWallet = "INSERT INTO wallet (user_id, user, balance) VALUES (:user_id, :prenom, 0)";
    $stmInsertWallet = $pdo->prepare($sqlInsertWallet);
    $stmInsertWallet->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmInsertWallet->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmInsertWallet->execute();