<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id']) && !strpos($_SERVER['PHP_SELF'], 'login.php')) {
    header("Location: login.php"); // Rediriger vers la page de connexion si non connecté et ce n'est pas la page de connexion elle-même
    exit();
}
?>
