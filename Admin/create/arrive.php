<?php 
error_reporting(0);

require_once '../../reservation/Database.php';
require_once '../../reservation/Arrive.php';

$db = new Database();
$arrive = new Arrive();
$table = 'arrive';

if ($_POST && isset($_POST['valide'])) {
    

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    
    $arrive->setTitre($titre);
    $arrive->setDescription($description);
    $arrive->setPrix($prix);

    $db->create($table, $arrive);

    header("Location: ../display/displayArrive.php");
}
else{
    echo "<script>alert('il y a un probleme')</script>";
    
}
