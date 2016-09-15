<?php 
session_start();
require_once('fonctions.php');
$connexion=connexion_db();

$tab = array(
':pseudo' => $_POST['pseudo'],
':nom' => $_POST['nom'],
':prenom' => $_POST['prenom'],
':mail' => $_POST['email'],
':password' => $_POST['mot_passe']
);

$sql = "INSERT INTO `candidat` (`pseudo_candidat`, `nom_candidat`, `prenom_candidat`, `mail_candidat`, `pass_candidat`) 
VALUES (:pseudo, :nom, :prenom, :mail, :password)" ;

$req = $connexion->prepare($sql);
$result = $req->execute($tab);

if (!$result) {
// ça t'affiche juste un code. C'est suffisant en prod pour que l'utilisateur te fasse un retour
//echo "Une erreur est survenue : " . $req->errorCode();

// Mais en dev, pour comprendre, tu peux faire ça :
print_r($req->errorInfo());
}else{
    header('Location: profil.php');   
}

?>