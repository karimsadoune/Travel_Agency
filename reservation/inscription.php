<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inscription</title>
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
    	<ul class="nav nav-tabs">
      		<li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#VO">Inscription en ligne</a>
      		</li>
    	</ul>
<form method="post" action="inscriptionEnLigne.php">
        <div class="form-group col-md-6">
          <label for="sel4">Votre Nom :</label>
          <input type="text" class="form-control" name="sel4" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
          <label for="nomUser">Votre Prénom:</label>
         <input type="text" class="form-control" name="nomUser" placeholder="Prénom">
        </div>
      <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control"  name="inputEmail" placeholder="Email">
     </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="inputPassword" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputTele">Telephone</label>
      <input type="telephone" class="form-control" name="inputTelephone" placeholder="Telephone">
    </div>
     <div class="form-group ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Accèpter les régles
      </label>
    </div>
  </div>
  <input type="submit" name="valide" class="btn btn-primary " value="Validé">

</form>
</div>
</div>
</div>



<ul class="pager">
  <li><a href="../">Acceuil</a></li>
</ul>


</body>
</html>