<?php
error_reporting(0);

require_once '../../reservation/Database.php';
require_once '../../reservation/Reservation.php';


$db = new Database();
$reservation = new Reservation();
$table = 'reservation';

    if(isset($_POST['valide'])){
        
                $villedep = $_POST['sel1'];
                $villeA = $_POST['sel2'];
                $option = $_POST['sel3'];
                $nbplace = $_POST['Nbplace'];
                $horaire = $_POST['horaire'];
                $dateV = $_POST['inputdate'];
                $id = $_POST['id'];

                $reservation->setOptions((string)$option);
                $reservation->setArrive((string)$villeA);
                $reservation->setNb((int)$nbplace);
                $reservation->setDepart((string)$villedep);
                $reservation->setDate($dateV);
                $reservation->setHoraire((string)$horaire);
                $reservation->setId_pers((int)$id);

                $prix = $db->calculPrixT($reservation);

                $reservation->setPrix($prix);

                $db->create($table, $reservation);
                header('Location: ../display/displayReservation.php');
        

}

 ?>
