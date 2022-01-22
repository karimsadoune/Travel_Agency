<?php 
require_once 'Database.php';
require_once 'Personne.php';


if ($_POST && isset($_POST['valide'])) {
	$db = new Database();
	$pers = new Personne();

	$nom = $_POST['sel4'];
	$prenom = $_POST['nomUser'];
	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];
	$tele = $_POST['inputTelephone'];
	$gridCheck = $_POST['gridCheck'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$pers->setNom($nom);
	$pers->setPrenom($prenom);
	$pers->setEmail($email);
	$pers->setTele($tele);
	$pers->setPassword($hashed_password);

	if($db->addPersonne($pers)){
		header('Location: login.php');
	}

	else{
		header('Location: inscription.php');
	}

	
}

?>
