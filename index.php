<?php include'entete.php';?>
		<div id="accueil-connexion">
    <div id="presentation">
        <h2>Acoustiqueemploi.fr</h2>
        <h3>Plateforme d'emploi <br />des métiers de l'acoustique</h3>
        <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis arcu auctor risus scelerisque molestie. Nulla eget massa lorem. Fusce sit amet mollis lorem, in rutrum nisl. 
        </p>
        <a href="" class="bouton-depot">Déposer un CV</a>
        <a href="" class="bouton-depot">Déposer une offre</a>
    </div>
    <div id="connexion">
        <div>
        <p>Connexion</p>
        <?php  traiter_identifiants($connexion,$parametres=array());?>
        </div>
    <a href="">Pas encore inscrit ? Par ici !</a>
    </div>
</div>
<?php include'pied_page.php';?>
		