<?php include 'log.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="" method="post">
        <label for="">User<input type="text" name="user" autocomplete="off"><br>
        <label for="">Balance<input type="text" name="balance"><br>
        <button type="submit" name="save">Valider</button>
    </form>
</body>
</html>


<?php
require_once("connect.php");

if(isset($_POST['save'])) {
    $user=$_POST['user'];
    $balance=$_POST['balance'];

    if (!empty($user) AND !empty($balance)) {
         if(strlen($user) < 5){
            echo "User doit contenir au moins 5 lettres";
         }
         else
         {
            $req=$co->prepare("INSERT INTO wallet(user, balance) VALUES (?,?)");
            $req->execute(array($user,$balance));
            
            if($req){ header("location:affichage.php");}
         }       
    }
}

?>