<?php

require_once("Models/userModel.php");

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/inscription') {
    if (isset($_POST['btnEnvoi'])){
        createUser($pdo);
        header('location:/connexion');
    }
    
    $title = "Inscription";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");

} 
elseif ($uri === "/connexion") {
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}









elseif ($uri === "/Itn") {
    $title = "Itn";
    $template = "Views/VoirEcole.php";
    require_once("Views/base.php");
}
elseif ($uri === "/SaintServais") {
    $title = "Collège Saint Servais";
    $template = "Views/VoirEcole.php";
    require_once("Views/base.php");
}
elseif ($uri === "/InstitutSaintAlbert") {
    $title = "Institut Saint Albert";
    $template = "Views/VoirEcole.php";
    require_once("Views/base.php");
}
elseif ($uri === "/EcoleEnfantJesus") {
    $title = "École Enfant Jésus";
    $template = "Views/VoirEcole.php";
    require_once("Views/base.php");
}