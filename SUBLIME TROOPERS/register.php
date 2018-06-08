<?php 
include_once 'PDOConnection.php';
if(isset($_POST['testEnvoi'])){
	if ((isset($_POST['nom']) && !empty($_POST['nom']))
				&& (isset($_POST['prenom']) && !empty($_POST['prenom']))
				&& (isset($_POST['grade']) && !empty($_POST['grade']))
				&& (isset($_POST['daten']) && !empty($_POST['daten']))
				&& (isset($_POST['passworda']) && !empty($_POST['passworda']))
				&& (isset($_POST['passwordb']) && !empty($_POST['passwordb']))
				&& (isset($_POST['mail']) && !empty($_POST['mail']))){
		extract($_POST);
	
		if($passworda != $passwordb){
			echo "Les mots de passe doivent être identiques";
		} else {

			try{
				$bdd=PDOConnection::getInstance();
				$req=$bdd->prepare("select * from membre where mail = ?");
				$req->execute(array($mail));
				if($req->rowCount() !=0 ){
					echo "le membre existe dans la base !!";
				}else {
					$passworda = $passworda;
					$reponse = $bdd->prepare("INSERT INTO membre VALUES(default,?,?,?,?,?,?)")or exit(print_r($bdd->errorInfo()));
					$reponse->execute(array($nom,$prenom,$grade,$mail, $daten, $passworda));
					header("Location:login.php");
				}
				
			}catch (PDOException $e){
				die('Erreur : ' .$e->getMessage());
			}
			

		}
	}
}

?>