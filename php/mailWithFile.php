<?php
function sendMailWithFile($civilite, $nom, $prenom, $phone, $mail, $message_utilisateur, $filePath, $fileName, $fileSize, $fileType) {

	$to = 'boiselet.jeremy@gmail.com, contact@icicartegrise.fr'; // Déclaration de l'adresse de destination.

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)) {
		$passage_ligne = "\r\n";
	} else {
		$passage_ligne = "\n";
	}

	$message_utilisateur = wordwrap($message_utilisateur, 70, "\r\n");

	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = $message_utilisateur;
	$message_html = "<html><head></head><body>".$message_utilisateur."</body></html>";
	//==========
 
	//=====Lecture et mise en forme de la pièce jointe.
	$fichier   = fopen($filePath, "r");
	$attachement = fread($fichier, filesize($filePath));
	$attachement = chunk_split(base64_encode($attachement));
	fclose($fichier);
	//==========
 
	//=====Création de la boundary.
	$boundary = "-----=".md5(rand());
	$boundary_alt = "-----=".md5(rand());
	//==========
 
	//=====Définition du sujet.
	$sujet = "Contact de Icicartegrise.fr";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"".$civilite." ".$nom." ".$prenom."\"<".$mail.">".$passage_ligne;
	$header.= "Reply-to: \"".$civilite." ".$nom." ".$prenom."\" <".$mail.">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	 
	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	 
	//=====Ajout du message au format HTML.
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;
	//==========
	 
	//=====On ferme la boundary alternative.
	$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
	//==========
	 
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	 
	//=====Ajout de la pièce jointe.
	$message.= "Content-Type: ".$fileSize."; name=\"".$fileName."\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
	$message.= "Content-Disposition: attachment; filename=\"".$fileName."\"".$passage_ligne;
	$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
	//========== 

	//=====Envoi de l'e-mail.
	mail($to,$sujet,$message,$header);
	//==========
}

function sendMailWithoutFile($civilite, $nom, $prenom, $phone, $mail, $message_utilisateur) {

	$to = 'boiselet.jeremy@gmail.com, contact@icicartegrise.fr'; // Déclaration de l'adresse de destination.

	//=====On filtre les serveurs qui rencontrent des bogues.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)) {
		$passage_ligne = "\r\n";
	} else {
		$passage_ligne = "\n";
	}

	$message_utilisateur = wordwrap($message_utilisateur, 70, "\r\n");

	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = $message_utilisateur;
	$message_html = "<html><head></head><body>".$message_utilisateur."<br><br>Contact téléphone : ".$phone."<br>Email : ".$mail."</body></html>";
	//==========

	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	//==========

	//=====Définition du sujet.
	$sujet = "Contact de Icicartegrise.fr";
	//=========

	//=====Création du header de l'e-mail.
	$header = "From: \"".$civilite." ".$nom." ".$prenom."\"<".$mail.">".$passage_ligne;
	$header.= "Reply-to: \"".$civilite." ".$nom." ".$prenom."\" <".$mail.">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format HTML
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	//==========
	//=====Envoi de l'e-mail.
	mail($to, $sujet, $message, $header);
	//==========
}
?>
