<?php
function connexion_db(){
	try{
		$con=new PDO('mysql:host=localhost;dbname=ac-emploi','root','');
	}catch(PDOException $e){
		echo"Erreur :".$e->getMessage();
		die();
	}
	return $con;
}
function verif_identifiants($connexion,$parametres=array()){
	$req=$connexion->prepare("Select * FROM candidat WHERE pseudo_candidat=? AND pass_candidat=?");
	$req->execute($parametres);
	$res=$req->fetch();
	//var_dump($res);
	return $res;
}
function traiter_identifiants($connexion,$parametres=array()){
	if(isset($_SESSION['pseudo'])){
		echo"Bienvenue <strong>".$_SESSION['pseudo']."</strong> <a href='deconnexion.php'> Se déconnecter</a>";
	}else {
		if(isset($_POST['pseudo'],$_POST['mot_passe'])){
			extract($_POST);
			$parametres=array($pseudo,$mot_passe);
			$res=verif_identifiants($connexion,$parametres);
			if(count($res)>1){
				$_SESSION['pseudo']=$pseudo;
				//$_SESSION['fonction']=$res['fonction'];
				echo"Bienvenue <a href='profil.php'><strong>".$_SESSION['pseudo']."</strong></a> <a href='deconnexion.php'> Se déconnecter</a>";
			}else  {
				echo"<form action='' method='post'>
				<span>Identifiants saisis invalides !!</span>
				<input type='text' name='pseudo' placeholder='Pseudo'/>
				<input type='password' name='mot_passe' placeholder='Mot de passe'/>
				<input type='submit' value ='Ok'/>
				</form>";
				}
	
		}else {
			echo"<form action='' method='post'>
			<input type='text' name='pseudo' placeholder='Pseudo'/>
			<input type='password' name='mot_passe' placeholder='Mot de passe'/>
			<input type='submit' value ='Ok'/>
		</form>";
		}
	}
}