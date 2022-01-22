<?php 
error_reporting(0);

require_once '../../reservation/Database.php';
require_once '../../reservation/Option.php';
$db = new Database();
$opt = new Option();
$table = 'options';

if ($_POST && isset($_POST['valide'])) {
    

    $option = $_POST['option'];
    $hotele = $_POST['hotele'];
    $transport = $_POST['transport'];
    $prix = $_POST['prix'];
    
    $opt->setId($option);
    $opt->setHotele($hotele);
    $opt->setTransport($transport);
    $opt->setPrix($prix);

    $db->create($table, $opt);

    header("Location: ../display/displayOptions.php");
}
else{
    echo "<script>alert('il y a un probleme')</script>";
    
}
