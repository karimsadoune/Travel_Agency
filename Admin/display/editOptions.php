<?php 
require_once '../../Reservation/Database.php';


$db = new Database();
$table = "options";


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
  <title>edit options</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
 
<div class="card text-center" style="padding:15px;">
  
</div><br> 
 
<div class="container">
  <form action="editOptions.php" method="POST">
    <div class="form-group">
      <label for="hotele">hotele:</label>
      <input type="text" class="form-control" name="hotele" value="<?php echo $object['hotele']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="transport">transport:</label>
      <input type="text" class="form-control" name="transport" value="<?php echo $object['transport']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="prix">prix:</label>
      <input type="text" class="form-control" name="prix" value="<?php echo $object['prix']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $object['id_opt']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>