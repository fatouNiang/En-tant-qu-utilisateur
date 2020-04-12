<?php
session_start(); 
$erreur='';
$login='';
$password='';
if(isset($_POST['connexion'])){
    if(empty($_POST['login']) && empty($_POST['password'])) {
        $erreur='Tous les champs sont obligatoires';
    }else{
        $_SESSION['login'] =$_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $js=file_get_contents('users.json');
        $_SESSION['data'] = json_decode($js, true);
        var_dump($_SESSION['data']);
        foreach($_SESSION['data'] as $users){
            if($_SESSION['login'] === $users['login'] && $_SESSION['password'] === $users['password']){
                if ($users['role'] === 'admin'){
                    $_SESSION['autoriser'] = 'oui';
                    header('Location: AccueilPage.php');
                }else{
                    $_SESSION['autoriser'] = 'oui';
                    header('Location: InterfaceJoueur.php');
                }
                $_SESSION['nom']=$users['nom'];
                $_SESSION['prenom']=$users['prenom'];
                 $_SESSION['image']=$users['image'];
                
            }else{
                $erreur="login ou mot de passe incorrect";
            }
        }
  
     }
}

?>
<html>
    <head>
        <title>connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php 
    // include('header.php'); 
    ?>
        <div class="cadre">
            <div class="header_cadre">
                <p>Login Form</p>
            </div>
            <form action="" method="post">
                <p style="color:red;"><?= $erreur ?></p>
                <div class="login">
                    <input type="text" name="login" placeholder="Login" class="login">
                    <img src="Images/Icônes/ic-login.png" alt="login" class="img">
                    </div>
                    <div class="pwd">
                            <input type="password" name="password" placeholder="Password" class="pwd">
                            <img src="Images/Icônes/ic-password.png" alt="login" class="img">
                    </div>
                    <div class="bas">
                        <div class="bouton"><input type="submit" name="connexion" value="Connexion" class="bouton"></div>
                        <div class="lien"><a href="inscrire.php">S'inscrire pour jouer ?</a></div>
                    </div>
            </form>
        </div>
    </body>
</html>