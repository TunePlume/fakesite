<?php 

require_once("connect.php");

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $req=$co->prepare("DELETE FROM wallet WHERE id= ?");
    $req->execute(array($id));
    if($req)
    {
        header("location:affichage.php");
    }
}

?>