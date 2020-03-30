<?php 

var_dump($_POST);

require("database.php");


// Message d'erreur
$errorMessage = "";


// Vérification du password et du confirm password
if($_POST["password"] !== $_POST["confirm_password"]){
    $errorMessage = "Les mots de passe ne correspondent pas";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}


$req = $bdd->prepare("INSERT INTO user(pseudo, password, role_id) VALUEs (:pseudo, :password, :role_id");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->bindParam(":role_id", $_POST["role_id"]);