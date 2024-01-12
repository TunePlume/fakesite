<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton headhunters - HHS</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="auth-container">
        <h2>Welcome to HHS.</h2>    
<form method="POST" action="traitement.php">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
    <br/>
    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
    <br/>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Entrez votre email">
    <br/>
    <label for="pass">Mot de passe</label>
    <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe">
    <br/>
    <input type="submit" value="Sign Up" name="submit">
</form>
</div>

</body>
</html>