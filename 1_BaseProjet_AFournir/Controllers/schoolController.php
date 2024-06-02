<?php

require_once("Models/schoolModel.php");

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/mesEcoles') {
    $schools = selectMySchools($pdo);

    
    $title = "Mes Écoles";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");
}
elseif ($uri === '/createSchool') {
    if(isset($_POST['btnEnvoi'])) {
        createSchool($pdo);
        $schoolId = $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["option"]); $i++) {
            $optionScolaireId = $_POST["option"] [$i];
            ajouterOptionEcole($pdo, $schoolId, $optionScolaireId);
        }
        header('location:/mesEcoles');
    }

    $options = selectAllOptions($pdo);
    $title = "Ajout d'une école";
    $template = "Views/Schools/editOrCreateSchool.php";
    require_once("Views/base.php");
}
elseif (isset($_GET["schoolId"]) && $uri === "/voirEcole?schoolId=" . $_GET["schoolId"]) {
    if (isset($_POST['btnEnvoi'])) {
        updateSchool($pdo);
    }
    
    $school = selectOneSchool($pdo);
    $optionsActiveSchool = selectOptionsActiveSchool($pdo); 
    $options = selectAllOptions($pdo);
    $title = "Ajout d'une école";
    $template = "Views/Schools/VoirEcole.php";
    require_once("Views/base.php");
}
elseif (isset($_GET["schoolId"]) && $uri == "deleteEcole?schoolId=" . $_GET["schoolId"]) {
    deleteOptionSchool($pdo);
    deleteOneSchool($pdo);
    header("location/mesEcoles");
}
elseif (isset($_GET["schoolId"]) && $uri == "/updateEcole?schoolId=" . $_GET["schoolId"]) {
    if (isset($_POST['btnEnvoi'])) {
        updateSchool($pdo);
        deleteOptionSchool($pdo);
        for ($i = 0; $i < count($_POST["option"]); $i++){
            $optionScolaireId = $_POST["option"][$i];
            AjouterOptionEcole($pdo, $_GET["schoolId"], $optionScolaireId);
        }
        header("location:/mesEcoles");
    }
    $school = selectOneSchool($pdo);
    $optionsActiveSchool = selectOptionsActiveSchool($pdo);
    $options = selectAllOptions($pdo);

    $title = "Mise à jour d'une école";
    $template = "Views/Schools/editOrCreateSchool.php";
    require_once("Views/base.php");
}