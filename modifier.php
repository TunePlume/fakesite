<?php include 'log.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
require_once("connect.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $req=$co->query("SELECT * FROM wallet WHERE id=$id");
    $mod=$req->fetch();
}
?>


<div class="auth-container">
<h2>Modification</h2>
<form action="" method="post">
        <label for="">User <input value="<?php echo $mod['user'];?>" type="text" name="user" autocomplete="off"><br>
        <label for="">Balance <input value="<?php echo $mod['balance'];?>" type="text" name="balance"><br>
        <button type="submit" name="modif">Valider</button>
</form>
</div>

<?php 

    if(isset($_POST['modif'])){
        $user=$_POST['user'];
        $balance=$_POST['balance'];
        $req=$co->prepare("UPDATE wallet SET user=?, balance= ? WHERE id=$id");
        $req->execute(array($user, $balance));

        if($req){
            header("location:affichage.php");
        }
    }

?>    
</body>
</html>






