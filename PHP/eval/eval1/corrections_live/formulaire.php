<?php
if($_POST){
	// si le formulaire est activé		
	echo '<pre>'; 
	print_r($_POST);
	echo '</pre>'; 
	
	//echo 'Prénom : <b>' . $_POST['prenom'] . '</b><br/>'; 
	
	foreach($_POST as $indice => $valeur){	
		echo ucfirst($indice) . ' : <b>' . $valeur . '</b><br/>';
	}
}
?>


<form method="post" action="">
	<input type="text" name="nom" placeholder="Nom" /><br/>
	<input type="text" name="prenom" placeholder="Prénom" /><br/>
	<input type="text" name="adresse" placeholder="Adresse" /><br/>
	<input type="text" name="ville" placeholder="Ville" /><br/>
	<input type="text" name="cp" placeholder="Code Postal" /><br/>
	<label>Sexe :</label><br/>
	
	<select name="sexe">
		<option value="m" >Homme</option>
		<option value="f" >Femme</option>
	</select><br/>

	<label>Description :</label><br/>
	<textarea></textarea><br/>

	<input type="submit" value="Enregistrer" /><br/>
</form>