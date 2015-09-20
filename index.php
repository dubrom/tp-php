<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="css/style.css">		
	</head>
	<body>
		<form>
			<fieldset>
				<legend>Parce que les trains font grève.</legend>

				<input id="ouiq1" type="radio" name="greve" value="oui" <?php if( $_GET['greve']=='oui'){ echo 'checked="checked"';} ?>>
				<label for="ouiq1">Oui</label>

				<input id="nonq1" type="radio" name="greve" value="non">
				<label for="nonq1">Non</label>
			</fieldset>

			<fieldset>
				<legend>J'en profiterai pour aller en cercle.</legend>

				<input id="ouiq2" type="radio" name="cercle" value="oui">
				<label for="ouiq2">Oui</label>

				<input id="nonq2" type="radio" name="cercle" value="non" <?php if( $_GET['cercle']=='non'){ echo 'checked="checked"';} ?>>
				<label for="nonq2">Non</label>
			</fieldset>

			<fieldset>
				<legend>J'irai chercher Cindy à l'école.</legend>

				<input id="ouiq6" type="radio" name="cindy" value="oui" <?php if( $_GET['cindy']=='oui'){ echo 'checked="checked"';} ?>>
				<label for="ouiq6">Oui</label>

				<input id="nonq6" type="radio" name="cindy" value="non">
				<label for="nonq6">Non</label>
			</fieldset>

			<fieldset>
				<legend>Je remettrai de l'essence.</legend>

				<input id="ouiq3" type="radio" name="essence" value="oui" <?php if( $_GET['essence']=='oui'){ echo 'checked="checked"';} ?>>
				<label for="ouiq3">Oui</label>

				<input id="nonq3" type="radio" name="essence" value="non">
				<label for="nonq3">Non</label>
			</fieldset>

			<fieldset>
				<legend>Je vais tester jusqu'à quelle vitesse elle monte.</legend>

				<input id="ouiq4" type="radio" name="vitesse" value="oui">
				<label for="ouiq4">Oui</label>

				<input id="nonq4" type="radio" name="vitesse" value="non" <?php if( $_GET['vitesse']=='non'){ echo 'checked="checked"';} ?>>
				<label for="nonq4">Non</label>
			</fieldset>

			<fieldset>
				<legend>En fait j'ai pas cours mais j'aimerais faire un city-trip à Rome.</legend>

				<input id="ouiq5" type="radio" name="citytrip" value="oui">
				<label for="ouiq5">Oui</label>

				<input id="nonq5" type="radio" name="citytrip" value="non"<?php if( $_GET['citytrip']=='non'){ echo 'checked="checked"';} ?>>
				<label for="nonq5">Non</label>
			</fieldset>

			

			<input class="btn" type="submit">
		</form>


		<?php

			$greve = $_GET['greve'];
			$cercle = $_GET['cercle'];
			$cindy = $_GET['cindy'];
			$essence = $_GET['essence'];
			$vitesse = $_GET['vitesse'];
			$citytrip = $_GET['citytrip'];

			$reponse = '';

			if( count($_GET) > 0){
				if( $greve == 'oui' && $cercle == 'non' && $cindy == 'oui' && $essence == 'oui' && $vitesse == 'non' && $citytrip == 'non'){
					$reponse = 'Ok vas-y fiston';
				}else{
					$reponse = 'Ca va pas le faire';
				}
			}
			
		?>

		<h1><?php echo $reponse ?></h1>

	</body>

<html>














