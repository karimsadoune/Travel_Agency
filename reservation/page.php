<?php 
require_once 'Database.php';
$db = new Database();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Réservation en Ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
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


<!-- Container (About Section) -->
<div id="reservation" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#VO">Réservation en ligne</a>
      </li>
    </ul>
<!-- Tab panes -->
  <div class="tab-pane container active" id="VO">
    
<form action="reservationEnLigne.php" method="post">
        <div class="form-group col-md-6">
          <label for="sel1">Ville de départ:</label>
          <select class="form-control" name="sel1">
         <!--<input type="text" class="form-control" name="sel1" placeholder="Ville de départ">-->
         <?php foreach ($db->getDepart() as $depart) {
                 ?>
            <option selected="selected" value="<?php echo $depart; ?>"><?php echo $depart; ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="sel2">Destination:</label>
         <!--<input type="text" class="form-control" name="sel2" placeholder="Ville d'arrivée">-->
         <select class="form-control" name="sel2">
            <?php foreach ($db->getArrive() as $arrive) {
                 ?>
            <option selected="selected" value="<?php echo $arrive; ?>"><?php echo $arrive; ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="sel3">Option de voyage:</label>
          <select class="form-control" name="sel3">
            <?php foreach ($db->getOptions() as $option) {
                 ?>
            <option selected="selected" value="<?php echo $option; ?>"><?php echo $option; ?></option>
          <?php } ?>
          </select>
        <!-- <input type="text" class="form-control" name="sel3" placeholder="Option de voyage">-->
        </div>
        <div class="form-group col-md-3">
          <label for="Nbplace">Nombre de places:</label>
          <select class="form-control" name="Nbplace">
            <option value="1">1</option>
            <option selected="selected" value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
         <!--<input type="text" class="form-control" name="Nbplace" placeholder="nombre de place">-->
        </div>
      <div class="form-group col-md-3">
      <label for="inputdate">Date de voyage</label>
          <div class='input-group' id="dates">
            <input type="text" class="form-control" autocomplete="off" id="datetimepicker2" name="inputdate" placeholder=" yyy-mm-dd" >
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
           </div>
      </div>
    <script type="text/javascript">
      $(function(){
        $('#dates #datetimepicker2').datepicker({
          'format':'yyyy-mm-dd',
          'autoclose': true
        });
      });
</script>
      <div class="form-group col-md-3">
      <label for="horaire">Heures</label>
       <select class="form-control" name="horaire">
            <option value="08">08:00</option>
            <option selected="selected" value="09">09:00</option>
            <option value="10">10:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15:30">15:30</option>
            <option value="16:30">16:30</option>
            <option value="18">18:00</option>
            <option value="20:30">20:30</option>
          </select>
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
<?php include('reservationEnLigne.php'); ?>

</div>
  </div>
  </div>
  </div>
</div>
<!--Pager-->
<ul class="pager">
  <li><a href="../">Acceuil</a></li>
</ul>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>