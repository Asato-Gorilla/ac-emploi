<?php include'entete.php';?>
<div id="inscription">
    <div class="wrapper">
        <form action='script-inscription.php' method='post'>
        <input type='text' name='nom' placeholder='Nom'/>
        <input type='text' name='prenom' placeholder='Prenom'/>
        <input type='text' name='email' placeholder='E-mail'/>
        <input type='text' name='verif-email' placeholder='Vérification E-mail'/>
        
        <input type='password' name='mot_passe' placeholder='Mot de passe'/>
        <input type='password' name='verif-mot_passe' placeholder='Vérification Mot de passe'/>
        
        
        
        
        <input type='submit' value ='Ok'/>
        </form>
    </div>   
</div>
<?php include'pied_page.php';?>
		