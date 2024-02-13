<div id="div-form-rdv" class="form-rdv box">
	<span class="blue-and-middle-size">
		Demande de rendez-vous
	</span>
	<form id="form-rdv" name="form-rdv" action="index.php" method="post"
				onsubmit="validFormRdv()">
		<div>
			<div class="civilite">
				<label for="civilite"><span class="asterisque">*</span> Civilit&eacute;</label><br/>
				<select id="civilite" name="civilite" 
								oninput="checkContactFormField('civilite')"
								onblur="checkContactFormField('civilite')">
					<option value=""></option>
					<option value="madame">Madame</option>
					<option value="monsieur">Monsieur</option>
					<option value="societe">Soci&eacute;t&eacute;</option>
					<option value="autre">Autre</option>
				</select>
				<div id="error-civilite" class="contact-form-error">
					Civilit&eacute; : veuillez choisir une option
				</div>
			</div>
		</div>
		<div>
			<div class="nom">
				<label for="nom"><span class="asterisque">*</span> Nom <i>(ou raison sociale)</i></label><br>
				<input type="text" name="nom" id="nom" maxlength=50 
							 placeholder="votre nom" 
							 oninput="checkContactFormField('nom')" 
							 onblur="checkContactFormField('nom')"/>
				<div id="error-nom" class="contact-form-error">Nom : minimum 2 caract&egrave;res</div>
			</div>
			<div class="prenom">
				<label for="prenom"><span class="asterisque">*</span> Pr&eacute;nom <i>(ou nom du responsable si personne morale)</i></label><br>
				<input type="text" name="prenom" id="prenom" maxlength=50 
							 placeholder="votre prénom" 
							 oninput="checkContactFormField('prenom')" 
							 onblur="checkContactFormField('prenom')"/>
				<div id="error-prenom" class="contact-form-error">Pr&eacute;nom : minimum 2 caract&egrave;res</div>
			</div>
		</div>

		<div>
			<div class="email">
				<label for="email"><span class="asterisque">*</span> Email</label><br>
				<input type="email" name="email" id="email" maxlength=70 
					     placeholder="votre email (exemple : moi@gmail.com)" 
							 oninput="checkContactFormField('email')" 
							 onblur="checkContactFormField('email')"/>
				<div id="error-email" class="contact-form-error">Email invalide ou vide</div>
			</div>
			<div class="telephone">
				<label for="telephone"><span class="asterisque">*</span> T&eacute;l&eacute;phone</label><br>
				<input type="text" name="telephone" id="telephone" maxlength=10 
							 placeholder="n° de téléphone (exemple : 0122334455)" 
							 oninput="checkContactFormField('telephone')"
							 onblur="checkContactFormField('telephone')"/>
				<div id="error-telephone" class="contact-form-error">T&eacute;l&eacute;phone invalide ou vide</div>
			</div>
		</div>

		<div>
			<div class="objectif-rdv">
				<label for="objectif">
				<span class="asterisque">*</span> Votre objectif lors de ce rendez-vous</label><br>
				<textarea name="objectif" id="objectif" maxlength=800 
									cols="50" rows="3" 
									oninput="checkContactFormField('objectif')"
									onblur="checkContactFormField('objectif')"></textarea>
				<div id="error-objectif" class="contact-form-error">Objectif : minimum 2 caract&egrave;res</div>
			</div>
		</div>


		<div>
			<div class="conditions">
				<div id="div-conditions-case">
					<input type="checkbox" name="conditions" id="conditions"
                 oninput="checkContactFormField('conditions')"
							   onblur="checkContactFormField('conditions')">
					<!-- <div> -->
            En cliquant sur « déposer une demande » vous acceptez que vos données soient utilisées par 
            Finance-Copro pour vous contacter par téléphone ou par e-mail à propos de votre demande. 
            Vous indiquez &eacute;galement avoir lu et accept&eacute; nos <a class="doc-link" href="index.php?page=mentions-legales" target="_blank">
            Mentions L&eacute;gales</a>.<br><br>
					<!-- </div>	 -->
				</div>
			</div>
		</div>

		<div>
			<div class="flex row jcc">
				<input type="hidden" name="contact-form-flag" id="contact-form-flag" value="flag" />
        <button type="reset" id="btn-reset-contact" name="btn-reset-contact" class="button CTAButton btn-active">
          RESET
        </button>   
				<button type="submit" id="btn-submit-contact" name="btn-submit-contact" 
							 class="btn-inactive button CTAButton" disabled >
					D&Eacute;POSER UNE DEMANDE
					<!-- onclick="validFormRdv()" -->
				</button>
			</div>
		</div>

		<div>
			<div class="asterisque">
				NB : Aucun versement de quelque nature que ce soit ne peut être exigé d'un particulier, 
				avant l'obtention d'un ou plusieurs prêts d'argent.
			</div>
		</div>
	</form>
</div>