<?php
$title = 'Contact';
require 'head.php';
require'nav.php'; 
?>
<div class="item it-contenu">	
	<form>
		<h2>Message</h2>
		<p class="infos-champs">Les champs annotés de (<span class="obligatoire">*</span>) sont obligatoires.</p>

		<form id="form_id" method="post" action="mesage.php">
			<fieldset form="form_id">
				<p>
					<label for="first-name">Prénom</label>
					<span class="obligatoire">*</span>: <br>
					<input id="first-name" type="first-name" name="prenon" placeholder="Ex: Pierre" required>
				</p>
				<p>
					<label for="name">Nom</label>
					<span class="obligatoire" >*</span>: <br>
					<input id="name" type="name" name="nom" placeholder="Ex: DUPONT" required>
				</p>
				<p>
					<label for="age">Date de naissance</label>: <br>
					<input id="age" type="date" name="age">
				</p>
				<p>
					Sexe :
					<select name="sexe">
						<option value="aucun">Selectionner </option>
						<option value="masculin">Masculin</option>
						<option value="feminin">Féminin </option>
						<option value="autre">Autre </option>
					</select>
				</p>
			</fieldset>
			<fieldset form="form_id">
				<p>
					<label for="email">E-Mail</label>
					<span class="obligatoire">*</span>: <br>
					<input id="email" type="email" name="email" placeholder="Ex: email@exemple.com" required>
				</p>
				<p>
					<label for="objet">Objet</label>
					<span class="obligatoire">*</span>: <br>
					<input id="objet" type="text" name="objet" placeholder="Ex: Paramètrage" minlength="5" required>
				</p>
				<p><label for="message">Saisissez votre message</label>
					<span class="obligatoire">*</span>: <br>
					<textarea id="message" name="article" rows="15" cols="60" placeholder="Votre message..." minlength="20" ></textarea>
				</p>
				<input class="boutton" type="submit" name="bouton" value="Envoyer">
			</fieldset>
		</form>
	</form>
</div>
<?php require'footer.php'; ?>
