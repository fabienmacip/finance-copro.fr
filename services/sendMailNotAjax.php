<?php
		if(isset($_POST['contact-form-flag']) && 'flag' == $_POST['contact-form-flag']) {
      
		//$DESTINATAIRE = "r.durin@finance-copro.fr";
		$DESTINATAIRE = "fabien.macip@gmail.com";
		$DESTINATAIRE_BCC = "fabien.macip@gmail.com";
		

    // Cette fonction sert à nettoyer et enregistrer un texte
    function cleanText($text,$br = true)
    {
        $text = htmlspecialchars(trim($text), ENT_QUOTES);
        $text = stripslashes($text);
        if($br){
          $text = nl2br($text);
        }
        return $text;
    }

		$civilite = $_POST['civilite'] ?? 'pas de civilite';
    $nom = $_POST['nom'] ?? 'pas de nom';
    $prenom = $_POST['prenom'] ?? '';
    $mail = $_POST['email'] ?? '';
    $tel = $_POST['telephone'] ?? '';
    $message = $_POST['objectif'] ?? ''; 
/*     $cp = $_POST['cp'] ?? '';
    $ville = $_POST['ville'] ?? ''; */
/* 		$delai = $_POST['delai-projet'] ?? '';
		$destination = $_POST['destination-projet'] ?? '';
		$nature = $_POST['nature-projet'] ?? '';
		$objectif = $_POST['objectif'] ?? '';
		$provenance = $_POST['provenance'] ?? ''; */
		/* $conditions = $_POST['conditions'] ?? ''; */

	/* 	$provenance = $provenance == '' ? 'non renseigné' : $provenance; */
		/* $conditions = $conditions == false ? "Pas opposé à la réutilisation des coordonnées" : "Opposé à la réutilisation des coordonnées"; */

/* 		$message = "Délai : ".$delai."\n\n";
		$message .= "Destination : ".$destination."\n\n";
		$message .= "Nature : ".$nature."\n\n";
		$message .= "Objectif : ".$objectif."\n\n";
		$message .= "Provenance : ".$provenance."\n\n"; */
		/* $message .= "Conditions : ".$conditions."\n\n"; */
    //$adresse = $_POST['ville'] ?? '';
    /* $adresse2 = $_POST['adresse2'] ?? '';*/


    
    //ICI, AJOUTER fonction dans services/mailEngine.php pour createMail

    $dest = $DESTINATAIRE;
    $sujet = "Message depuis le site finance-copro.fr de la part de ".$prenom." ".strtoupper($nom);
    $corp = "Message reçu depuis le site finance-copro.fr\n\n";
    $corp .= "CIVILITE : ".$civilite."\nNOM : ".$nom."\nPRENOM : ".$prenom."\nMAIL : ".$mail."\nTEL : ".$tel."\n\n";
    $corp .= "ADRESSE : ".$cp." ".$ville."\n\n";
    $corp .= "MESSAGE\n\n".$message."\n";

      $fromOK = 'mail_php@pcf-lcf.fr';
			
      $headers  = array(

				'MIME-Version' => '1.0',
				'From' => $formOK,
				'Reply-To' => ''.$mail,
				'Bcc' => $DESTINATAIRE_BCC.",".$mail,
				'Content-Type' => ' text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ; ',
				'Content-Disposition' => ' inline',
				'Content-Transfer-Encoding' => ' 7bit',
				'X-Envelope-From' => ' <'.$mail.'>',
				'X-Mailer' => 'PHP/'.phpversion()
			);

       
 				echo "<br><br>";
				echo "DEST : ".$dest;
				echo "<br><br>";
				echo "HEADERS : ".$headers;
				echo "<br><br>";
				echo "SUJET : ".$sujet;
				echo "<br><br>";
				echo "CORPS : ".$corp;
				echo "<br><br>";
 				
    if (mail($dest, $sujet, $corp, $headers)) {
      //echo "Email envoyé avec succès à $dest ...";
    } else {
      //echo "Échec de l'envoi de l'email...";
    }




}

?>