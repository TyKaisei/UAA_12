<?php 

function selectAllSchools($pdo)
{
    try {
        $query = 'select * from school';
        $selectSchool = $pdo->prepare($query);
        $selectSchool->execute();
        $schools = $selectSchool->fetchAll();
        return $schools;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectOneSchool($pdo)
{
    try {
        $query = 'select * from school where schoolId = :schoolId';
        $selectSchool = $pdo->prepare($query);
        $selectSchool->execute([
            'schoolId' => $_GET["schoolId"]
        ]);
        $school = $selectSchool->fetch();
        return $school;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectOptionsActiveSchool($pdo)
{
    try {
        $query = 'select * from optionscolaire where optionScolaireId in (select optionScolaireId from option_ecole where schoolId = :schoolId);';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->execute([
            'schoolId' => $_GET["schoolId"]
        ]);
        $options = $selectOptions->fetchAll();
        return $options;    
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateSchool($dbh)
{
    try {
        $query = 'update school set schoolNom = :schoolNom, schoolAdresse = :schoolAdresse, schoolVille = :schoolVille, schoolCodePostale = :schoolCodePostale,
        schoolNumero = :schoolNumero, schoolImage = :schoolImage, where schoolId = :schoolId';
        $updateSchoolFromId = $dbh->prepare($query);
        $updateSchoolFromId->execute([
            'schoolNom' => $_POST["nom"],
            'schoolAdrese' => $_POST["adresse"],
            'schoolVille' => $_POST['ville'],
            'schoolCodePostale' => $_POST['code=postal'],
            'schoolNumero' => $_POST['phone=number'],
            'schoolImage' => $_POST['image'],
            'schoolId' => $_GET['schoolId']
        ]);
    } catch (PDOException $e) {
        $message = $e->GetMessage();
        die($message);
    }
}

function deleteOptionSchool($dbh) 
{
    try {
        $query = 'delete from option_ecole where schoolId = :schoolId';
        $deleteAllSchoolsFromId = $dbh->prepare($query);
        $deleteAllSchoolsFromId->execute([
            'schoolId' => $_GET["schoolId"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteOneSchool($pdo) {
    try {
        $query = 'delete from school where schoolId = :schoolId';
        $deleteAllSchoolsFromId = $pdo->prepare($query);
        $deleteAllSchoolsFromId->execute([
            'schoolId' => $_GET['schoolId']
        ]);
    } catch (PDOException $e) {
        $message = $e->GetMessage();
        die($message);
    }
}

function deleteOptionSchoolsFromUser($dbh)
{
    try {
        $query = 'delete from option_ecole where schoolId in (select schoolId from school where utilisateurId = :utilisateurId)';
        $deleteOptionSchoolsFromId = $dbh->prepare($query);
        $deleteOptionSchoolsFromId->execute([
            'utilisateurId' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteAllSchoolsFromUser($pdo)
{
    try {
        $query = 'delete from school where utilisateurId = :utilisateurId';
        $deleteAllSchoolsFromUser = $pdo->prepare($query);
        $deleteAllSchoolsFromUser->execute([
            'utilisateurId' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectMySchools($pdo) {
    try {
        $query = 'select * from school where utilisateurId=:utilisateurId';
        $selectSchool = $pdo->prepare($query);
        $selectSchool->execute([
            'utilisateurId' => $_SESSION["user"]->id
        ]);
        $schools = $selectSchool->fetchAll();
        return $schools;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllOptions($pdo) {
    try {
        $query = 'SELECT * FROM optionscolaire';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->execute();
        $options = $selectOptions->fetchAll();
        return $options;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createSchool($pdo) {
    try {
        $query = 'insert into school (schoolNom, schoolAdresse, schoolVille, schoolCodePostal, schoolNumero, schoolImage, utilisateurId)
        values (:schoolNom, :schoolAdresse, :schoolVille, :schoolCodePostal, :schoolNumero, :schoolImage, :utilisateurId)';
        $addSchool = $pdo->prepare($query); 
        $addSchool->execute([
        'schoolNom' => $_POST["nom"],
        'schoolAdresse' => $_POST["adresse"],
        'schoolVille' => $_POST["ville"],
        'schoolCodePostal' => $_POST["code=postal"],
        'schoolNumero' => $_POST["phone=number"],
        'schoolImage' => $_POST["image"],
        'utilisateurId' => $_SESSION["user"]->id
    ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function AjouterOptionEcole($pdo, $schoolId, $optionId) {
    try {
        $query = 'insert into option_ecole (schoolId, optionScolaireId) values (:schoolId, :optionScolaireId)';
        $deleteAllSchoolsFromUser = $pdo->prepare($query);
        $deleteAllSchoolsFromUser->execute([
            'schoolId' => $schoolId,
            'optionScolaireId' => $optionId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}