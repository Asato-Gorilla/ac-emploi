<?php 
    include'entete.php';
    $var = $_SESSION['pseudo'];
    $result = $connexion->prepare("SELECT * FROM candidat WHERE pseudo_candidat = :pseudo");
        $result->execute(array(
                            'pseudo' => $var
                            ))
                            ;


 $donnees = $result->fetch();

?>





<div id="profil">
    <div class="wrapper">
        <div class="infos-user">
            
            
            <p>
                <span class="label-info">Nom : </span>
                <span class="info"><?php echo $donnees['nom_candidat']; ?></span>
            </p>
            <p>
                <span class="label-info">Prenom : </span>
                <span class="info"><?php echo $donnees['prenom_candidat']; ?></span>
            </p>
            <p>
                <span class="label-info">Pseudo : </span>
                <span class="info"><?php echo $donnees['pseudo_candidat']; ?></span>
            </p>
            <p>
                <span class="label-info">Email : </span>
                <span class="info"><?php echo $donnees['mail_candidat']; ?></span>
            </p>
        
        

        </div>
    </div>   
</div>
<?php include'pied_page.php';?>
		