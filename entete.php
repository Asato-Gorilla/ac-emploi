<?php 
session_start();
require_once('fonctions.php');
$connexion=connexion_db();
?>
<!DOCTYPE html> 

<html>

	<head>

		<meta charset="UTF-8" />
		<meta name="author" content="Nicolas GAUDIN pour Acoustique Emploi" />
		<meta name="copyright" content="Acoustique Emploi" />
		<meta name="robots" content="index, follow" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<title>Acoustique Emploi - Plateforme d'emploi des métiers de l'acoustique</title>

		<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9 ]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	</head>

	<body class="">
        <header>
           <div class="wrapper">
            <h1><a href="index.html">AcoustiqueEmploi.fr</a></h1>
            <nav>
                <ul>
                    <li id="depocv"><a href="cv.html">Déposer un CV</a></li>
                    <li id="depooffre"><a href="offre.html">Déposer une offre</a></li>
                    <li id="navcontact"><a href="contact.html">Contact</a>|</li>
                    <li id="navfaq"><a href="#">FAQ</a></li>
                    <li id="navcgu"><a href="#">CGU</a></li>
                </ul>
                <ul id="reseaux">
                    <li id="viadeo">
                        <a href="#">Viadeo</a>
                    </li>
                    <li id="linkedin">
                        <a href="#">LinkedIn</a>
                    </li>
                    <li id="twitter">
                        <a href="#">Twitter</a>
                    </li>
                    <li id="facebook">
                        <a href="#">Facebook</a>
                    </li>
                </ul>
            </nav>
            </div>
        </header>
			<div id='formulaire'>
			    <div class="wrapper">
				<?php  traiter_identifiants($connexion,$parametres=array());?>
				</div>
			</div>