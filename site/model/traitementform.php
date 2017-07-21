<?php

$userForm = array(
    'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
    'prenom' => FILTER_SANITIZE_SPECIAL_CHARS,
    'email' => FILTER_SANITIZE_EMAIL);

$Users = filter_input_array(INPUT_POST, $userForm);

$objUser = new Users();
$idUser = $objUser->createUser($Users);



