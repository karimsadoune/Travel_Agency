<?php


require_once '../../Reservation/Database.php';
require_once '../../Reservation/Personne.php';


$db = new Database();
$table = "personne";
$data = $db->display($table);

// Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $db->delete($table, $deleteId);
      header("Location: displayPersonne.php");
  }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>personne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
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
    <pre><h3>les <?=$table.'s';?></h3></pre>

 <table style="width:100%" >
<tr>
<th>id_personne</th>
<th>nom</th>
<th>prenom</th>
<th>email</th>
<th>tele</th>
<th>password</th>
<th>action</th>
</tr>
<?php  foreach ($data as $row) {?>
<tr>
    <?php for ($i = 0; $i < count($row)/2; $i++) { ?>
        <td><?= $row[$i]?></td>
    <?php } ?>
        <td>
            <a href="edit.php?editId=<?php echo $row[0] ?>" style="color:green">
              edit</a>
            <a href="displayPersonne.php?deleteId=<?php echo $row[0] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              delete
            </a>
        </td>

</tr>
<?php } ?>
 </table>

<div style="margin-top: 200px;">
    <pre><h3>Ajouter</h3></pre>
<?php 
include '../create/createPersonne.php'; ?>
</div>


<pre style="text-align:center;
  margin-top: 100px;"><a href="../">Acceuil</a>
</pre>
 </body>
 </html>