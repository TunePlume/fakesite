<?php
$servername = "localhost";
$username = "root";
$password = "";
$co = "";


try{

    $co=new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $exc)
    {
        echo "Echec de connexion" . $exc->getMessage();
    }

?>