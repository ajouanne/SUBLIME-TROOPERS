<?php
session_start();
if(isset($_SESSION['username'])){
	echo "Bienvenue ".$_SESSION['username'].$_SESSION['grade'];
	?>
<?php 
}else header('Location:login.php')

?>
