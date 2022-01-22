<?php 
session_start();
unset($_SESSION['USER']);
$_SESSION['loggedin'] = false;
header('Location: ../index.php');



