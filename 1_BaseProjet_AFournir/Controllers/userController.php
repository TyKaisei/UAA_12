<?php
require_once("Models/userModel.php");


$uri = $_SERVER['REQUEST_URI'];


if ($uri === '/inscription') {
    if (isset($_POST['btnEnvoi'])){
        $messageError = verifEmptyData();
        if (!$messageError)
        {
            createUser($pdo);
            header('location:/connexion');
        }
    }
    $title = "Inscription";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");

}
elseif ($uri === "/connexion") {
    if (isset($_POST['btnEnvoi'])) {
        $erreur = false;
        
        if (connectUser($pdo))
        {
            header("location:/index.php");
        }
        else
        {
            $erreur = true;
        }
    }
    $title = "Connexion";
    $template = "Views/Users/connexion.php";
    require_once("Views/base.php");
}
elseif ($uri === "/deconnexion") {
    session_destroy();
    header("location:/");
}
elseif ($uri === "/profil") {
    $title = "Mise à jour du profil";
    $template = "Views/Users/profil.php";
    require_once("Views/base.php");
}
elseif ($uri === "/updateProfil") {
    if (isset($_POST['btnEnvoi'])){
        $messageError = verifEmptyData();
        if (!$messageError){
            updateUser($pdo);
            updateSession($pdo);
            header('location:/profil');
        }
    }
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");
}
elseif ($uri === "/deleteProfil") {
    deleteOptionSchoolsFromUser($pdo);
    deleteAllSchoolsFromUser($pdo);
    deleteUser($pdo);
    header("location:/deconnexion");
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