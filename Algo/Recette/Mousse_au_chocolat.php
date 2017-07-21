<?php

function recette ($invite) {

		$chocolat = 0.025;
		$sucre = 0.0125;
		$lait = 0.0125;
		$jus = 0.0925;


	if ($invite >= 1 && $invite <= 2000) {

		if ($totalchoco = $invite * $chocolat) {
			

		} 
		if ($totalsucre = $invite * $sucre) {
			
			
		} 
		if ($totallait = $invite * $lait) {
			
			
		} 
		if ($totaljus = $invite * $jus) {
			
			
		} 

		echo '<p> Vous êtes ' . $invite . ' à vouloir manger une bonne mousse au chocolat des familles, il vous faudrat :<br/><br/>' .  $totalchoco . ' Kg de chocolat' . '<br><br/>' . $totalsucre . ' Kg de sucre' . '<br/><br>' . $totallait . ' L de lait' . '<br><br/>'  . 'Le jus d\'une boite de conserve de pois chiche de ' . $totaljus . ' L'. '<br><br/>' . '1 pincée de cannelle' ;
		
	}

	else echo 'TROP D\'INVITÉ, ON EST PAS CHEZ MÉMÉ';
}

	




recette (13);

?>



















	