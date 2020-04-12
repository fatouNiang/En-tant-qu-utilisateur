<html>
    <head>
        <title>inscription</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="styleInscription.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id="cadre">
            <h1>S'INSCRIRE</h1>
            <p>Pour tester votre niveau de culture generale</p>
            <div class="form">
                <form action="" method="POST">
                    <label for="">Nom</label><br>
                    <input type="text" name="nom" placeholder="Aaaa"><br>
                    <label for="">Prenom</label><br>
                    <input type="text" name="prenom" placeholder="Bbbb"><br>
                    <label for="">Login</label><br>
                    <input type="text" name="nom" placeholder="AaaaBBB"><br>
                    <label for="">Password</label><br>
                    <input type="password" name="password" id=""><br>
                    <label for="">Confirmer Password</label><br>
                    <input type="password" name="password" id=""><br>
                    <label for="">Avatar</label>
                    <input type="submit" name="choisir_fichier" value="choisir un fichier" class="bouton"><br>
                    <input type="submit" name="creer_compte" value="Creer Compte" class="bouton">
                </form>
            </div>
            <div class="droite">
                <div class="avatar"><img src="" alt="image avatar"></div>
                <div class="nom"><h1>Avatar du joueur</h1></div>
            </div>
        </div>
    </body>
</html>