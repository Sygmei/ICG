<?php

function trans_id() {
    $carac = '0123456789';
    $length = strlen($carac);
    
    do {
        $trans_id = '';
        for($i = 0; $i < 6; $i++) {
            $trans_id .= $carac[rand(0, $length - 1)]; 
        } 
    }while(intval($trans_id) > 899999);
    
    
    return $trans_id;
}

function signature($field, $key) {
    ksort($field); // tri des paramétres par ordre alphabétique
    $contenu_signature = "";

    foreach ($field as $nom => $valeur) {
	    if(substr($nom,0,5) == 'vads_') {
	        $contenu_signature .= $valeur."+";
	    }
    }
    
    $contenu_signature .= $key;	// On ajoute le certificat à la fin de la chaîne.
    
    $signature = sha1($contenu_signature);
    
    return $signature;
}
?>