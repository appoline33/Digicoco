<!-- Lien vers le css -->
<link rel="stylesheet" href="dist/css/style.css">



<h1>Digicoco</h1>



<?php
// Vérifier s'il existe déjà une session et si c'est le cas rediriger vers recettes.php
session_start();

if(isset($_SESSION["pseudo"])){

}
?>


<!-- Formulaire de connexion de session -->
<div class="form_login">
    <h2>Connexion</h2>
    <form action="" method="post" class="login">
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="text" placeholder="Rôle" name="role">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" value="Se connecter">
    </form>
</div>