<?php session_start();
if ($_SESSION['autoriser']!='oui') {
    header('Location:index.php');
    exit();
 }
?>

<html>
    <head>
        <title>Interface du joueur</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="styleInterfaceJoueur.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id="cadre">
            <div class="headerCadre">
                <div class="avatar">
                    <img src="<?= $_SESSION['image'] ?>" alt="">
                   <p> <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></p>
                </div>
                <div class="titre">
                    <h3>BIENVENU DANS LA PLATEFORME DE JEU QUIZZ<br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</h3>
                </div>
                <div class="deconnexion">
                    <button><a href="deconnexion.php"> Déconnexion</a></button>
                </div>
            </div>
        </div>
    </body>
</html>