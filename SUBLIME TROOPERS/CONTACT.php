<?php session_start();
if(empty($_POST["nom"]) OR empty($_POST["prenom"]) OR empty($_POST["grade"]) OR empty($_POST["mail"]) OR empty($_POST["daten"]) OR empty($_POST["passworda"]) OR empty($_POST["passwordb"])) {
	echo "Vous devez remplir tous les champs nécessaires !";
}
else {
	extract($_POST);
	echo "Merci pour votre message Mme/Mr $nom. Nous vous répondrons dès que possible !<br/>";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CONTACT</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<header id="CONTACT">

		</header>
			<ul id="nav">
			  <li><a href="ACCUEIL.php" title="aller à la section 1">ACCUEIL</a></li>
			  <li><a href="QUI SONT-ILS.php" title="aller à la section 2">QUI SONT-ILS ?</a></li>
			  <li><a href="GALERIE.php" title="aller à la section 3">GALERIE</a></li>
			  <li><a href="MUSIQUE.php" title="aller à la section 4">MUSIQUE</a></li>
			  <li><a href="CONTACT.php" title="aller à la section 5">CONTACT</a></li>
			</ul>
	<form action="register.php" method="post">
		<table>
			<caption>
				</br>
				<b>SUIVEZ LES TROOPERS</b>
			</caption>
			<tr>
				<td><br /> <input type="text" placeholder="Nom" name="nom" required><br />
					<br />
				</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Prénom" name="prenom" required><br />
					<br />
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
					<br /> <br />
				</td>
			</tr>
			<tr>
				<td><input type="email" placeholder="Adresse mail" name="mail"
					required><br /> <br />
				</td>
			</tr>
			<tr>
				<td><input type="date" placeholder="Date de naissance" name="daten"
					required><br /> <br />
				</td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Mot de passe" name="passworda"
					required><br /> <br />
				</td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Répétez mot de passe"
					name="passwordb" required><br /> <br />
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Inscrivez-vous !!" name="testEnvoi" /></td>
			</tr>
		</table>
	</form>
	<br>
	<a href="login.php">Je possède déjà un compte </a>
		<footer> 
			<tr>
			</tr>  
		</footer>
	</body>
</html>