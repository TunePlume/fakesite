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

    $requete = $bdd->prepare("INSERT INTO users VALUES (NULL, :nom, :prenom, :email, :pass)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "pass" => $pass

        )
    );
    header("Location: #");
}

?>