<?php session_start();
if ($_SESSION['autoriser']!='oui') {
    header('Location:index.php');
    exit();
}
?>
<h1>bienvenu a la page d'accueil Administrateur</h1>
<button> <a href="deconnexion.php"> DECONNEXION</a></button>
