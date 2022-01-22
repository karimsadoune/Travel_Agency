<?php 
require_once '../../Reservation/Database.php';


$db = new Database();
$table = "personne";


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
  <form action="edit.php" method="POST">
    <div class="form-group">
      <label for="name">nom:</label>
      <input type="text" class="form-control" name="nom" value="<?php echo $object['nom']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="name">prenom:</label>
      <input type="text" class="form-control" name="prenom" value="<?php echo $object['prenom']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $object['email']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="username">tele:</label>
      <input type="text" class="form-control" name="tele" value="<?php echo $object['tele']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $object['id_pers']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>