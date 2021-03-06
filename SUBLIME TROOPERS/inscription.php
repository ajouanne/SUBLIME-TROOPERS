<!DOCTYPE html>

<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" type="text/css" rel="stylesheet"/>
<title>Inscription</title>
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
<a href='login.php'><input type="submit" value="Connexion"/>
			</td>
		</tr>
	</table>
	
	<!-- menu -->
	<ul class="menu">
		<li><a href="accueil.php">ACCUEIL</a></li>
		<li><a href="quisont_ils.php">QUI SONT-ILS ?</a></li>
		<li><a href="galerie.php">GALERIE</a></li>
		<li><a href="musique.php">MUSIQUE</a></li>
		<li><a href="inscription.php">INSCRIPTION</a></li>
	</ul>
	</ul>
</header>

<!-- Section corps -->

	<form action="register.php" method="post">
		<table id="registre">
		<tr>
		<td>
			<b>SUIVEZ LES TROOPERS</b>
			</td>
			<td>
			<br>
			<B><a id="compte" href="login.php">Je possède déjà un compte,<br>&nbsp; mon colonel !</a></B>
			</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Nom" name="nom" required><br />
				</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Prénom" name="prenom" required><br />
				</td>
			</tr>
			<tr>
				<td>
					<select name="grade" id="grade">
						<option value="caporal">Caporal</option>
						<option value="bombardier">Bombardier</option>
						<option value="1ère classe">1ère classe</option>
						<option value="2nde classe">2nde classe</option>
						<option value="soldat">Soldat</option>
						<option value="trooper" selected>Trooper</option>
						<option value="engagé">Engagé</option>
						<option value="légionnaire">Légionnaire</option>
					</select>
					<br />
				</td>
			</tr>
			<tr>
				<td><input type="email" placeholder="Adresse mail" name="mail" required><br />
				</td>
			</tr>
			<tr>
				<td><input type="date" placeholder="Date de naissance" name="daten" required><br />
				</td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Mot de passe" name="passworda"
					required><br />
				</td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Répétez mot de passe"
					name="passwordb" required><br />
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Inscrivez-vous !!" name="testEnvoi"/></td>
			</tr>
		</table>
	</form>

	
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