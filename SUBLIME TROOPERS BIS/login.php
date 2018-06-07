<?php 
session_start();
include_once 'PDOConnection.php';
if (isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $passworda=$_POST['passworda'];
    if(empty($mail)){
        echo"<div class='erreur'> Veuillez saisir votre email</div>";
    } else if (empty($passworda)){
        echo "<div class='erreur'> Veuillez saisir votre mot de passe</div>";
    }
    else {
        
        try{
            $bdd=PDOConnection::getInstance();
            $password=sha1($passworda);
            $reponse = $bdd->prepare("SELECT * FROM membre WHERE mail= :login AND passworda= :password")or exit(print_r($bdd->errorInfo()));
            $reponse->bindParam(':mail', $mail, PDO::PARAM_STR);
            $reponse->bindParam(':passworda', $passworda, PDO::PARAM_STR);
            $reponse->execute();
            
        }catch (Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
        if ($reponse->rowCount()==1){
            $_SESSION['name']=$mail;
            $_SESSION['mdp']=$passworda;
            header('Location:membre.php');
            
        }else {
            echo utf8_encode("<div class='erreur'> Mail ou mot de passe erroné !!</div>");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Formulaire de connexion</title>
<link href="style.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
	<form method="post" action="login.php">
	
		<table>
			<tr>
				<td>Adresse Mail :</td>
				<td><input type="text" name="mail" /></td>
			</tr>
			<tr>
				<td>Mot de passe :</td>
				<td><input type="password" name="passworda" /></td>
			</tr>

		</table><br>

		<div>
			<input type="submit" value="Connexion" name="submit" /> <input type="reset" value="Effacer" /><br> <br>
			<a href="CONTACT.php">Vous n'avez pas encore rejoint les Troopers ?</a>
		</div>
	</form>
</body>
</html>
