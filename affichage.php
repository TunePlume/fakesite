<?php include 'log.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
<div class="admin-container">
    <h2>Admin Panel</h2>
    <table class="table">
        <th>ID</th>
        <th>Users</th>
        <th>Balance</th>
        <th>Actions</th>

        <?php
            require_once('connect.php');
            $req=$co->query("SELECT * FROM wallet");
            while($aff=$req->fetch())
       {?>

        <tr>
            <td> <?php echo $aff['id']; ?> </td>
            <td> <?php echo $aff['user']; ?> </td>
            <td> <?php echo $aff['balance']; ?> </td>
            <td>
                <a href="modifier.php?id=<?php echo $aff['id']?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <a href="supprimer.php?id=<?php echo $aff['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
            </td>
        </tr>

    <?php } ?>    
    </table>
</div>
</body>
</html>