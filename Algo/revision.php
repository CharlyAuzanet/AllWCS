<?php

function hello ($str, $str2){
	$strchar1 = strlen($str);
	$strchar2 = strlen($str2);

if ($str == "hello") {
	echo "plop";
}
elseif ($str == "world") {
	echo "plip";
}
elseif ($strchar1 == $strchar2) {
	echo "plipplop";
}
else echo $str . '<br>' . $str2;
}

hello ('wolrf', 'wqcolrd');