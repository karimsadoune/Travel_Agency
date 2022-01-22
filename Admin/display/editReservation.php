<?php 
require_once '../../Reservation/Database.php';


$db = new Database();
$table = "reservation";


  // Edit customer record
 if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $object = $db->displayById($table, $editId);
  }
 
  // Update Record in customer table
 if(isset($_POST['update'])) {
    $db->update($table, $_POST);
  }  



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
 
<div class="card text-center" style="padding:15px;">
  
</div><br> 
 
<div class="container">
  <form action="editReservation.php" method="POST">
    <div class="form-group">
      <label for="id">id personne:</label>
      <input type="text" class="form-control" name="id_pers" value="<?php echo $object['id_pers']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="options">options:</label>
      <input type="text" class="form-control" name="options" value="<?php echo $object['options']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="arrive">arrive:</label>
      <input type="text" class="form-control" name="arrive" value="<?php echo $object['arrive']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="depart">depart:</label>
      <input type="text" class="form-control" name="depart" value="<?php echo $object['depart']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="prix">prix:</label>
      <input type="text" class="form-control" name="prix" value="<?php echo $object['prix']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="nombre">nombre de personne:</label>
      <input type="text" class="form-control" name="nb_pers" value="<?php echo $object['nb_pers']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="horaire">horaire:</label>
      <input type="text" class="form-control" name="horaire" value="<?php echo $object['horaire']; ?>" required="">
    </div>
     <div class="form-group">
      <label for="date">date:</label>
      <input type="date" class="form-control" name="date" value="<?php echo $object['date']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $object['id_res']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>
 






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>