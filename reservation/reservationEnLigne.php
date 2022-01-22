<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once 'Database.php';
require_once 'Reservation.php';
require_once 'Personne.php';

$db = new Database();
$reservation = new Reservation();

try {
    if(isset($_POST['valide']) && isset($_POST['gridCheck'])){
        
                $villedep = $_POST['sel1'];
                $villeA = $_POST['sel2'];
                $option = $_POST['sel3'];
                $nbplace = $_POST['Nbplace'];
                $horaire = $_POST['horaire'];
                $dateV = $_POST['inputdate'];
                $id = unserialize($_SESSION['USER']);

                $reservation->setOptions((string)$option);
                $reservation->setArrive((string)$villeA);
                $reservation->setNb((int)$nbplace);
                $reservation->setDepart((string)$villedep);
                $reservation->setDate($dateV);
                $reservation->setHoraire((string)$horaire);
                $reservation->setId_pers((int)$id->getId());

                $prix = $db->calculPrixT($reservation);

                $reservation->setPrix($prix);

                $db->addReservation($reservation);
                header('location:../index.php');
        

}
}
catch (Exception $e) {
    echo $e->getMessage();
}

 ?>
