<!DOCTYPE html>

<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" type="text/css" rel="stylesheet"/>
<title>Musique</title>
</head>
<body>

<!-- Section en-tête -->

<header>

	<!-- logo et titre -->
	<table class="en-tete">
		<tr>
			<td class="tdLogo"><img id="logo" src="LOGO_ST.png" align="center"/></td>
			<td class="titre">SUBLIME TROOPERS</td>
			<td class=blank></td>
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

		<article align=center>
		<br></br>
		<tr>
			<td><div id="soustitre">MIND FUCK</div> 
			<audio controls>	
				<source src="Musiques/Mind_Fuck" type="audio/wav"> 
			</audio>
			</td>
		</tr> <br>
		<tr>
			<td><div id="soustitre">LOVELY GIRL</div>
			<audio controls>	
				<source src="Musiques/Lovely_Girl" type="audio/wav">
			</audio>	
			</td>
		</tr><br>
		<tr>
			<td><div id="soustitre">BROKEN</div>
			<audio controls>	
				<source src="Musiques/Broken" type="audio/wav"><br>
			</audio>	
			</td>
		</tr>	
		
		</br></br>
		
			<div> <B>RAPPORTS VIDEO</B> </div>
		<tr>
		<td><p>A LA RECHERCHE DES SUBLIME TROOPERS<br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/irEB0keNgMA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</p>	</td>	</tr>
		
		<tr>
		<td><p>PAINIAC - LIVE<br>
		<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/S0JEDYStQSQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</p>	</td>
		
		<td><p>BIG BAD ROCK (LIVE ACOUSTIQUE)<br>
		<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/llYOO0_p8S8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</p>	</td>	</tr>
		
		<tr>
		<td><p>OLD POPE OF ROCK (LIVE)<br>
		<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/ih_AZntEOjc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</p>	</td>
		
		<td><p>RMT N°1 : INSIDE OF YOU - HOOBASTANK<br>
		<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/JN7FQ6-Tjc0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</p>	</td>	</tr>
		
		
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