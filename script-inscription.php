<?php 
session_start();
require_once('fonctions.php');
$connexion=connexion_db();

$tab = array(
':nom' => $_POST['nom'],
':prenom' => $_POST['prenom'],
':mail' => $_POST['mail'],
':password' => $_POST['password']
);

$sql = "INSERT INTO `candidat` ('nom_candidat', 'prenom_candaidat','mail_candidat', 'pass_candidat') 
VALUES (:nom, :prenom, :mail, :password)" ;

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