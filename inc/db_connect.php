<?php
try
{
	$bdd = new PDO('mysql:host=db630061859.db.1and1.com;dbname=db630061859;charset=utf8', 'dbo630061859', '06@coustiquE', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>