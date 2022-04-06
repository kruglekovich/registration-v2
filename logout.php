<?php 
Session_start();
unset($_SESSION['authorized']);
header('Location: login.php');
?>
