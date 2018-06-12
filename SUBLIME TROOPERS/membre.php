<?php
session_start();
if(isset($_SESSION['username'])){
	echo "Bienvenue ".$_SESSION['identifiant'];
	?>
<?php 
}else header('Location:login.php')

?>
