<?php

function plop ($str) {
	$nb_char = strlen($str);

//J'ecris upSmall si le nombre de caractères est entre 5 et 10 dans ma variable
if ($nb_char > 5 && $nb_char < 10) {
	echo "UpSmall";
}
//Jecris upBug si le nombre de caractères est entre 5 et 15 dans ma variable
elseif ($nb_char > 5 && $nb_char < 15) {
	echo "upBug";
}
//J'ecris up si il y a plus de 5 caractères dans ma variable
elseif ($nb_char > 5) {
	echo "up";
}
//J'ecris down si il y a moins de 5 caractères dans ma variable
elseif ($nb_char < 5) {
	echo "down";
}
//J'ecris la chaîne de caractères
else echo $str;
}

plop ('azeaa');