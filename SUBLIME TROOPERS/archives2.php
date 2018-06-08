<!DOCTYPE html>

<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" type="text/css" rel="stylesheet"/>
<title>Archives</title>
</head>
<body>

<!-- Section en-tête -->

<header>

	<!-- logo et titre -->
	<table class="en-tete">
		<tr>
			<td class="tdLogo"><img id="logo" src="LOGO_ST.png" align="center"/></td>
			<td class="titre">SUBLIME TROOPERS</td>
			<td class=blank></a></td>
		</tr>
	</table>
	
	<!-- menu -->
	<ul class="menu">
		<li><a href="accueil2.php">ACCUEIL</a></li>
		<li><a href="quisont_ils2.php">QUI SONT-ILS ?</a></li>
		<li><a href="galerie2.php">GALERIE</a></li>
		<li><a href="musique2.php">MUSIQUE</a></li>
		<li><a href="archives2.php">ARCHIVES</a><li> 
	</ul>
</header>

<!-- Section corps -->

<?php
session_start();
if(isset($_SESSION['username'])){
	echo "Bienvenue ".$_SESSION['username'];
	?>
<?php 
}else header('Location:login.php')
?>
		</br>
		<article>
			<div align=center id="bloc1">ARCHIVES TROOPERS : ACCES AUTORISE 
			</div>
		</br>
		<table>
			<tr>
				<td> <a href="Image/RdT/Plan_de_bataille.pdf">Plan de bataille</a></td>
			</tr>
			<tr>
				<td> <a href="Image/RdT/Rapport_de_transmission1.pdf">Rapport de transmission n°1</a> </td>
			</tr>
			<tr>
				<td> <a href="Image/RdT/Rapport_de_transmission2.pdf">Rapport de transmission n°2</a> </td>
			</tr>
			<tr>
				<td> <a href="Image/RdT/Rapport_de_transmission3.pdf">Rapport de transmission n°3</a> </td>
			</tr>
		</table>

<?php
echo "<a href='logout.php'><p>Déconnexion</p><br><br>";
?>

<!-- Section pied-de-page -->

<footer>
	<div>
		<ul>
			<li><a href="https://www.facebook.com/sublimetroopers/?ref=aymt_homepage_panel" target="_blank"><img src="Icône/LOGO_FB.png"></a> | </li>
			<li><a href="https://www.youtube.com/channel/UC6ws6qxZBoURIHrB4rYQcVQ" target="_blank"><img src="Icône/LOGO_YT.png"></a> | </li>
			<li><a href="https://www.instagram.com/sublimetroopers/" target="_blank"><img src="Icône/LOGO_INST.png"></a> | </li>
			<li>©2018 | </li>
			<li> Crédits Photos et Vidéos : Pascal Jacopit, Laure Lachiver, Marie Savignat </li>
		</ul>
	</div>
</footer>

</body>
</html>