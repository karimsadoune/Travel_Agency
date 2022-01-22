<?php 
error_reporting(0);

require_once '../../reservation/Database.php';
require_once '../../reservation/Depart.php';

$db = new Database();
$depart = new Depart();
$table = 'depart';

if ($_POST && isset($_POST['valide'])) {
    

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    
    $depart->setTitre($titre);
    $depart->setDescription($description);
    $depart->setPrix($prix);

    $db->create($table, $depart);

    header("Location: ../display/displayDepart.php");
}
else{
    echo "<script>alert('il y a un probleme')</script>";
    
}
