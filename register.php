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

<?php

if(isset($_GET["errorMessage"])){ ?>

<div class="alert alert-danger alert-dismissible fade show">
    <?= $_GET["errorMessage"]?>
    <button class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php } ?>

    <form action="functions/createUser.php" method="post" class="login">
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="confirm_password">
        
        <div class="check_box">
            <p>Souhaites-tu être un Coco Helper ?</p>
            <label for="role">Oui</label>
            <input type="checkbox" name="role" id="role" class="form-check-input">
        </div>
        
        
        <input type="submit" value="Créer mon compte">
    </form>
</div>