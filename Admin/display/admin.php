<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once '../Reservation/Reservation.php';
require_once '../Reservation/Database.php';
require_once '../Reservation/Personne.php';


$db = new Database();
$pers = unserialize($_SESSION['USER']);
$res = $db->getReservationByPersonne($pers->getId());




 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styelpage.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">
    <script type="text/javascript" rel="stylesheet" src="bootstrap-datepicker.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2. 4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="bootstrap-datepicker.fr.min.js"></script>
 </head>
 <body>
    <h3>les reservations de <?php echo $pers->getNom().' '.$pers->getPrenom(); ?></h3>
 <table style="width:100%" >
<tr>
<th><pre>id_reservation</pre></th>
<th><pre>id_personne</pre></th>
<th><pre>option</pre></th>
<th><pre>arrive</pre></th>
<th><pre>depart</pre></th>
<th><pre>date</pre></th>
<th><pre>prix</pre></th>
<th><pre>nombre de personne</pre></th>
<th><pre>horaire</pre></th>
</tr>
<?php  foreach ($res as $row) {?>
<tr>
    <?php for ($i = 0; $i < count($row)/2; $i++) { ?>
        <td><?= $row[$i]?></td>
    <?php } ?>
</tr>
<?php } ?>
 </table>
 </body>
 </html>