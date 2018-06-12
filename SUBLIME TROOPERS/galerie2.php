<!DOCTYPE html>

<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" type="text/css" rel="stylesheet"/>
<title>Galerie</title>
</head>
<body>

<!-- Section en-tête -->

<header>

	<!-- logo et titre -->
	<table class="en-tete">
		<tr>
			<td class="tdLogo"><img id="logo" src="LOGO_ST.png" align="center"/></td>
			<td class="titre">SUBLIME TROOPERS</td>
			<td> 
<a href='logout.php'><input type="submit" value="Déconnexion"/>
</td>
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

		</article>
		<p>
		SHOOTINGS <br> <br> 
		<img src="Image/Shootings/Shooting_Manège_1.png"> 
		<img src="Image/Shootings/Shooting_Manège_2.png"> 
		<img src="Image/Shootings/Shooting_Manège_3.png"> 
		<img src="Image/Shootings/Shooting_Manège_4.png"> 
		<img src="Image/Shootings/Captain_Trash.png"> 
		<img src="Image/Shootings/Colonel_Bob.png"> 
		<img src="Image/Shootings/Major_Muscle.png"> 
		<img src="Image/Shootings/Sergent_Potard.png"> 
		<img src="Image/Shootings/Shooting_Casse_1.png"> 
		<img src="Image/Shootings/Shooting_Casse_2.png"> 		
		<img src="Image/Shootings/Shooting_Manège_5.png"> 
		<img src="Image/Shootings/Drums.png"> <br> <br> <br>
		
		CONCERTS <br> <br> 
		<img src="Image/Concerts/Scènes_Croisées_2016.png">
		<img src="Image/Concerts/Concert_Acoustique.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_1.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_2.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_3.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_4.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_5.png">
		<img src="Image/Concerts/Concert_Coutras_18-06-16_6.png">
		<img src="Image/Concerts/Concert_des_10_ans_de_Lucanes_1.png">
		<img src="Image/Concerts/Concert_des_10_ans_de_Lucanes_2.png">
		<img src="Image/Concerts/Concert_des_10_ans_de_Lucanes_3.png">
		<img src="Image/Concerts/Concert_Jeunes_en_scènes_1.png">
		<img src="Image/Concerts/Concert_Jeunes_en_scènes_2.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_1.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_2.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_3.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_4.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_5.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_6.png">
		<img src="Image/Concerts/Scènes_Croisées_2017_7.png"> <br> <br> <br>
		
		REPETITIONS <br> <br> 
		<img src="Image/Repetitions/Bass.png"> 
		<img src="Image/Repetitions/Bob_à_la_batterie.png"> 
		<img src="Image/Repetitions/Drummer.png"> 
		<img src="Image/Repetitions/Installation.png"> 
		<img src="Image/Repetitions/Mini_résidence.png"> 
		<img src="Image/Repetitions/Mister_Trash.png"> 
		<img src="Image/Repetitions/Répétition_Lucane_1.png"> 
 		<img src="Image/Repetitions/Répétition_Lucane_1.png"> 
		<img src="Image/Repetitions/Répétition_Lucane_1.png"> <br> <br> <br>

		DIVERS <br> <br> 
		<img src="Image/Divers/Affiche_des_Combattants.png"> 
		<img src="Image/Divers/Billy.png"> 
		<img src="Image/Divers/First_War.png"> 
		<img src="Image/Divers/Guitar_teaser.png"> 
		<img src="Image/Divers/LOGO_ST_edited.png"> 
		<img src="Image/Divers/SGT_Potard.png"> 				
		<img src="Image/Divers/Sublime_Troopers_à_lhonneur.png"> 
		<img src="Image/Divers/Tournage_du_Teaser_des_Troopers_1.png"> 
		<img src="Image/Divers/Tournage_du_Teaser_des_Troopers_2.png"> 
		<img src="Image/Divers/Troopers!!.png"> 
		
		</p>

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