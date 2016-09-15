<?php include'entete.php';?>
		<div id='corps'>
			<?php
				if(isset($_SESSION['pseudo'])){
					echo"
					<h2>Espace des membres</h2>
					<p>Bienvenue sur la page résérvée aux membres</p>
					<p>Bienvenue sur la page résérvée aux membres Bienvenue sur la page résérvée aux membresBienvenue sur la page résérvée aux membres</p>
					<p>Bienvenue sur la page résérvée aux membres Bienvenue sur la page résérvée aux membresBienvenue sur la page résérvée aux membres</p>
					<p>Bienvenue sur la page résérvée aux membres</p>
					";
				}else echo"<p style='color:red;font-size:1.2em;'>Attention, cette page est résèrevée aux membres. Veuillez vous identifier SVP</p>";
				
			?>
		</div>
<?php include'pied_page.php';?>