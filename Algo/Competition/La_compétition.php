<?php

// Mes variables sont les âges et les poids /*

function catégorie ($age, $poids) {


// Si l'age est compris entre 9 (inclus) et 11 (inclus) et que le poids est inférieur à 42, alors Poussin */
	if ($age >= 9 && $age <= 11 && $poids <= 42) {

		echo 'poussin';
	}

			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
		
	

// Sinon si l'age est compris entre 12 et 13 et que le poids est entre 42 (inclus) et 49 (inclus), alors Benjamin */
	elseif ($age >= 12 && $age <=13) {

		echo 'Benjamain';
	}
			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
// Sinon si l'age est compris entre 14 et 15 et que le poids est entre 50 (inclus) et 59 (inclus), alors Mininime */
	elseif ($age >= 14 && $age <=15) {

		echo 'Minime';
	}
			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
// Sinon si l'age est compris entre 16 et 17 et que le poids est entre 60 (inclus) et 67 (inclus), alors Cadet */
	elseif ($age >= 16 && $age <=17) {

		echo 'Cadet';
	}
			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
// Sinon si l'age est compris entre 18 (inclus) et 20 (inclus) et que le poids est entre 68 (inclus) et 73 (inclus), alors Junior */
	elseif ($age >= 18 && $age <=20) {

		echo 'Junior';
	}
			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
// Sinon, l'age est supérieur a 21 (inclus) et que le poids est égal ou supérieur à 74, alors Sénior */
	elseif ($age >= 21) {

		echo 'Sénior';
	}
			elseif ($poids < 42) {

				echo 'poussin';
			}

			elseif ($poids >= 42 && $poids <= 49) {

				echo 'Benjamin';
			}

			elseif ($poids >= 50 && $poids <= 59) {

				echo 'Minime';
			}

			elseif ($poids >= 60 && $poids <= 67) {

				echo 'Cadet';
			}

			elseif ($poids >= 68 && $poids <= 73) {

				echo 'Junior';
			}

			elseif ($poids >= 74) {

				echo 'Sénior';
			}
	
}
	echo 'Votre catégorie est '; catégorie (15, 1000);
	
?>

