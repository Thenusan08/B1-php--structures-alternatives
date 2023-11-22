<?php
		echo " Saisir le somme due par le passager :" ;
		$sommeDue = rtrim(fgets(STDIN)) ;
	if($sommeDue == 0){
		echo  " le passager s'est acquitte des somme dues .\n" ; }
	elseif($sommeDue > 0){
			echo " le passager doit $sommeDue euros  \n " ; }
	elseif($sommeDue < 0){
			echo " valeur icorrecte \n " ; 
			 }
?>
