<?php
	echo " Saisir la vitesse :" ;
	$vitesse = rtrim(fgets(STDIN)) ;
	if($vitesse > 0){
		    echo  " Vitesse $vitesse noeuds .\n" ; 
	}
	elseif ($vitesse < 0) {
		      echo " 0 noeuds \n" ;
    } 
?>
