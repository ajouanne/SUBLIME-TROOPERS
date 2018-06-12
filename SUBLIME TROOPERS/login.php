<?php
session_start();
include_once 'PDOConnection.php';
if (isset($_POST['submit'])){
	extract($_POST);
    if(empty($login)){
        echo"<div class='erreur'> Veuillez saisir votre login</div>";
    } else if (empty($password)){
        echo "<div class='erreur'> Veuillez saisir votre mot de passe</div>";
    }
    else {
        
        try{
            $bdd=PDOConnection::getInstance();
            $password=sha1($password);
            $reponse = $bdd->prepare("SELECT * FROM membre WHERE mail= :login AND passworda= :password")or exit(print_r($bdd->errorInfo()));
            $reponse->bindParam(':login', $login, PDO::PARAM_STR);
            $reponse->bindParam(':password', $password, PDO::PARAM_STR);
            $reponse->execute();
            
        }catch (Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
        if ($reponse->rowCount()==1){
            $_SESSION['username']=$login;
            $_SESSION['mdp']=$password;
            header('Location:accueil2.php');
            
        }else {
            echo utf8_encode("<div class='erreur'> Login ou mot de passe erroné !!</div>");
        }
    }
}
?>

<html>
<head>
<title>Formulaire de connexion</title>
<link href="style.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<header>
	<table class="en-tete">
		<tr>
			<td class="tdLogo"><img id="logo" src="LOGO_ST.png" align="center"/></td>
			<td class="titre">SUBLIME TROOPERS</td>
			<td class=blank></td>
		</tr>
	</table>
</header>

	<form method="post" action="login.php">
	
		<br>
		<table>
			<tr>
				<td>Login :</td>
				<td><input type="text" placeholder="adresse mail" name="login" />
				</td>
			</tr>
			<tr>
				<td>Mot de passe :</td>
				<td><input type="password" placeholder="mot de passe" name="password" />
				</td>
			</tr>

		</table><br>

		<div align=right class="toto">
		<input type="submit" value="Login" name="submit" /> 
		<input type="reset" value="Effacer" /><br> <br> 
		</div>
		<div>
		<a href="inscription.php">Pas encore membre ?</a>
		</div>
	</form>
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