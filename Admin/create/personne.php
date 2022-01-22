<?php
error_reporting(0);
 
require_once '../../reservation/Database.php';
require_once '../../reservation/Personne.php';
$db = new Database();
$pers = new Personne();
$table = 'personne';

if ($_POST && isset($_POST['valide']) && strlen($_POST['inputPassword']) > 5) {
    

    $nom = $_POST['sel4'];
    $prenom = $_POST['nomUser'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $tele = $_POST['inputTelephone'];
    $gridCheck = $_POST['gridCheck'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $pers->setNom($nom);
    $pers->setPrenom($prenom);
    $pers->setEmail($email);
    $pers->setTele($tele);
    $pers->setPassword($hashed_password);

    $db->create($table, $pers);

    header("Location: ../display/displayPersonne.php");
}
else{
    echo "<script>alert('il y a un probleme')</script>";
    
}
?>