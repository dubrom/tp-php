<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="css/style.css">		
	</head>
	<body class="body">
		<?php

			$greve = $_GET['greve'];
			$cercle = $_GET['cercle'];
			$cindy = $_GET['cindy'];
			$essence = $_GET['essence'];
			$vitesse = $_GET['vitesse'];
			$citytrip = $_GET['citytrip'];

			$reponse = '';

			function checkedOui($argument){
				if( $argument == 'oui'){ echo 'checked="checked"';}
			}
			function checkedNon($argument){
				if( $argument == 'non'){ echo 'checked="checked"';}
			}

			if( count($_GET) > 0){
				if( $greve == 'oui' && $cercle == 'non' && $cindy == 'oui' && $essence == 'oui' && $vitesse == 'non' && $citytrip == 'non'){
					$reponse = 'Ok vas-y fils!';
				}else{
					$reponse = 'Non, je crois que tu vas en rester au vélo!';
				}
			}
			
		?>

		<div <?php 
				// mettre une classe différente si la réponse est non
				if( $reponse == 'Ok vas-y fils!'){echo 'class="reponse"'; }
				else{ echo 'class="reponse reponse__non"'; }
			?>>
			<h1 class="text-reponse"><?php echo $reponse ?></h1>
			<?php 
				// mettre des contenu différent en fonction de la réponse
				if( $reponse == 'Ok vas-y fils!'){
					echo '<img class="img" src="voiture.jpg" />';
				}else if( $reponse == 'Non, je crois que tu vas en rester au vélo!'){
					echo '
						<a class="btn btn__reessayer" href="#reessayer">Réessayer</a>
						<img class="img" src="velo.jpg" />';
				}
			?>
		</div>

		

		<div <?php
			// faire disparaitre le jeu si on a réussi 
			if ($reponse == 'Ok vas-y fils!'){
				echo 'class="jeu display"';
			}else{
				echo 'class="jeu"';
			}
		?>>
			<h1 class="titre" id="reessayer">Convaincre mon père...</h1>

			<p class="sous-titre">Pour convaincre mon père de prêter sa voiture pour aller à l'école, certains arguments font toujours mouche.</p> 
			<p class="sous-titre sous-titre__bottom">Pour t'aider à les trouver, j'ai dressé une liste d'arguments possibles. À toi de choisir lesquels employer ou non pour qu'il accepte.</p>

			<form class="form">
				<fieldset class="fieldset">
					<legend class="question">Parce que les trains font grève.</legend>

					<input class="input input__oui" id="ouiq1" type="radio" name="greve" value="oui" required <?php checkedOui($greve) ?>>
					<label class="choix choix__oui choix__oui" for="ouiq1">Oui</label>

					<input class="input" id="nonq1" type="radio" name="greve" value="non" >
					<label class="choix" for="nonq1">Non</label>
				</fieldset>

				<fieldset class="fieldset">
					<legend class="question">J'en profiterai pour aller en cercle.</legend>

					<input class="input input__oui" id="ouiq2" type="radio" name="cercle" value="oui" required>
					<label class="choix choix__oui" for="ouiq2">Oui</label>

					<input class="input" id="nonq2" type="radio" name="cercle" value="non" <?php checkedNon($cercle) ?>>
					<label class="choix" for="nonq2">Non</label>
				</fieldset>

				<fieldset class="fieldset">
					<legend class="question">J'irai chercher Cindy à l'école.</legend>

					<input class="input input__oui" id="ouiq6" type="radio" name="cindy" value="oui" required <?php checkedOui($cindy) ?>>
					<label class="choix choix__oui" for="ouiq6">Oui</label>

					<input class="input" id="nonq6" type="radio" name="cindy" value="non">
					<label class="choix" for="nonq6">Non</label>
				</fieldset>

				<fieldset class="fieldset">
					<legend class="question">Je remettrai de l'essence.</legend>

					<input class="input input__oui" id="ouiq3" type="radio" name="essence" value="oui" required <?php checkedOui($essence) ?>>
					<label class="choix choix__oui" for="ouiq3">Oui</label>

					<input class="input" id="nonq3" type="radio" name="essence" value="non">
					<label class="choix" for="nonq3">Non</label>
				</fieldset>

				<fieldset class="fieldset">
					<legend class="question">Je vais tester jusqu'à quelle vitesse elle monte.</legend>

					<input class="input input__oui" id="ouiq4" type="radio" name="vitesse" value="oui" required>
					<label class="choix choix__oui" for="ouiq4">Oui</label>

					<input class="input" id="nonq4" type="radio" name="vitesse" value="non" <?php checkedNon($vitesse) ?>>
					<label class="choix" for="nonq4">Non</label>
				</fieldset>

				<fieldset class="fieldset">
					<legend class="question">En fait j'ai pas cours mais j'aimerais faire un city-trip à Rome.</legend>

					<input class="input input__oui" id="ouiq5" type="radio" name="citytrip" value="oui" required>
					<label class="choix choix__oui" for="ouiq5">Oui</label>

					<input class="input" id="nonq5" type="radio" name="citytrip" value="non" required<?php checkedNon($citytrip) ?>>
					<label class="choix" for="nonq5">Non</label>
				</fieldset>

				<input class="btn" type="submit" value="Tenter sa chance">
			</form>
		</div>
	</body>
</html>














