<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>create arrive</title>
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
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker.fr.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
<div id="reservation" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <!-- Nav tabs -->
        
        

<form method="post" action="../create/arrive.php">
        <div class="form-group col-md-6">
          <label for="sel4">titre</label>
          <input type="text" class="form-control" name="titre" placeholder="titre">
        </div>
        <div class="form-group col-md-6">
          <label for="nomUser">description</label>
         <input type="text" class="form-control" name="description" placeholder="description">
        </div>
      <div class="form-group col-md-6">
      <label for="inputEmail">prix</label>
      <input type="text" class="form-control"  name="prix" placeholder="prix">
     </div>
    
    <div class="form-group ">
    
  </div>
  <input type="submit" name="valide" class="btn btn-primary " value="Create">

</form>
</div>
</div>
</div>






</body>
</html>
