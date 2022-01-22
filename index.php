<?php
session_start();
require_once 'reservation/Database.php';
require_once 'reservation/Reservation.php';
$db = new Database(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agence de voyage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
  include 'nav1.php';
}
else{
  include 'nav.php';
}
?>

<section id="main-image">
    
</section>
<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <h2>À propos de notre agence</h2><br>
      <p><strong>GlobeTour</strong> est une agence spécialisée en voyages organisés, billetterie, transport touristique, Omra...
GlobeTour vous propose des voyages organisés meilleurs qualité/prix. Si vous recherchez un spécialiste du voyage avec un prix réduit, nous sommes le spécialise que vous recherchez.</p>
    </div>
    <div class="col-sm-4">
        <span><img src="images/logoPage.png"></span>
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>Ce que nous offrons!</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-road logo-small"></span>
      <h4>Les meilleurs itinéraires routiers</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Sécurité</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-plane logo-small"></span>
      <h4>Les meilleures destinations</h4>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-euro logo-small"></span>
      <h4>Les meilleurs prix</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>Hotellerie & Bon plats</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span>
      <h4 style="color:#303030;">Des bons surprises</h4>
    </div>
  </div>
</div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Circuit</h2><br>
  <h4>Voyager c'est vivre le rêve en réalité</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article2.png" alt="Paris" width="400" height="300">
        <p><strong>ENVIE DE S'EVADER</strong></p>
        <p>Parfois un peu d'evasion serait le bienvenu et ferait le plus drand bien !</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article1.jpg" alt="New York" width="400" height="300">
        <p><strong>PARTEZ EN FAMILLE</strong></p>
        <p>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article2.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>PARTIR SEULE</strong></p>
        <p>Rien n’est plus excitant que de partir seul en vacances. Se faire de nouveaux amis, découvrir le monde,..etc.</p>
        
      </div>
    </div>
  </div><br>
  
  <h2>Aller vivez l'expérience en plein joie</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Qui voyage de nuit ne voit que des étoiles."<br><span>Les dictons d'oc et proverbes de Provence </span></h4>
      </div>
      <div class="item">
        <h4>"Informe-toi de tes compagnons de voyage avant de te mettre en route."<br><span>Les apologues et contes orientaux </span></h4>
      </div>
      <div class="item">
        <h4>"L'expérience que le voyageur acquiert dans ses courses a souvent pour effet de le guérir de la manie de voyager."<br><span>Les proverbes et dictons persans </span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Tarif Section) -->
<div id="tarif" class="container-fluid">
  <div class="text-center">
    <h2>Nos Options</h2>
    <h4>Découvrir les options de voyages </h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          
          <h1><?php echo $db->getOption('Basic')['id_opt']; ?></h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : <?php echo $db->getOption('Basic')['hotele'];  ?> Etoiles</p>
          <p><strong>Transport</strong> : <?php echo $db->getOption('Basic')['transport']  ?> Qualité</p>
          <p><strong></strong></p>
        
        </div>
        <div class="panel-footer">
          <h3><?php echo $db->getOption('Basic')['prix'];  ?> DH</h3>
          <h4>pour une place</h4>
         <!-- <button class="btn btn-lg" onclick="document.location.href='Abonnement/abonner.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?php echo $db->getOption('Pro')['id_opt']; ?></h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : <?php echo $db->getOption('Pro')['hotele']; ?> Etoiles</p>
          <p><strong>Transport</strong> : <?php echo $db->getOption('Pro')['transport']; ?> Qualité</p>
        </div>
        <div class="panel-footer">
          <h3><?php echo $db->getOption('Pro')['prix']; ?> DH</h3>
          <h4>pour une place</h4>
          <!--<button class="btn btn-lg" onclick="document.location.href='Abonnement/pro.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?php echo $db->getOption('Premium')['id_opt']; ?></h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : <?php echo $db->getOption('Premium')['hotele']; ?> Etoiles</p>
          <p><strong>Transport</strong> : <?php echo $db->getOption('Premium')['transport']; ?> Qualité</p>
        </div>
        <div class="panel-footer">
          <h3><?php echo $db->getOption('Premium')['prix']; ?> DH</h3>
          <h4>pour une place</h4>
          <!--<button class="btn btn-lg" onclick="document.location.href='Abonnement/premium.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>    
  </div>
</div>
  




<!-- Container (tarif Section) -->
<?php 
$result = "";
try{
if ($_POST && isset($_POST['valide'])) {
  $reservation = new Reservation();
  $reservation->setNb((int)$_POST['tarif4']);
  $reservation->setArrive($_POST['tarif2']);
  $reservation->setDepart($_POST['tarif1']);
  $reservation->setOptions($_POST['tarif3']);

  $result = $db->calculPrixT($reservation);
}
}
catch(Exception $e){
  echo $e->getMessage();
}
?>
<form action="" method="post"> 
    <div class="container-fluid text-center bg-grey">
       <div class="panel panel-default">
        <div class="panel-heading"><h1>Tarif</h1></div>
              <div class="panel-body">
                 <div class="form-group col-md-3">
                      <label for="tarif1">Ville départ:</label>
                      <select class="form-control" name="tarif1">
                      <?php foreach ($db->getDepart() as $depart){?>
                      <option value="<?php echo $depart; ?>"><?php echo $depart; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                  
                    <div class="form-group col-md-3">
                      <label for="tarif2">Ville d'arriver:</label>
                      <select class="form-control" name="tarif2">
                        <?php foreach($db->getArrive() as $arrive){?>
                        <option selected="selected" value="<?php echo $arrive; ?>"><?php echo $arrive; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                 
                    <!--------------------------------->
                    <div class="form-group col-md-3">
                      <label for="tarif3">Option de voyage:</label>
                      <select class="form-control" name="tarif3">
                        <?php foreach($db->getOptions() as $option){ ?>
                        <option selected="selected" value="<?php echo $option; ?>"><?php echo $option; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                     <!--------------------------------->
                          <div class="form-group col-md-3">
                            <label for="tarif4">Nombre de place</label>
                            <select class="form-control" name="tarif4">
                              <option selected="selected" value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
        <input type="submit" name="valide" class="btn btn-primary " value="Chercher le prix">
      </div>
      <span style="color:dark;font-weight:bold"><?php echo $result." DH"; ?></span>
    </div>
  </div>
</div>
</form>




<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    
      <p>Chez notre agence nous savons que voyager est une aventure humaine mais également un engagement financier important pour vous. C'est pourquoi nous mettons un point d'honneur à prendre en compte chacune de vos attentes pour vous aider dans la préparation de votre séjour.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Morocco</p>
      <p><span class="glyphicon glyphicon-phone"></span> 08 08 52 68 77</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contact@agencevoyage.ma</p>
    
    
  </div>
</div>



<?php include 'footer.php'; ?>

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