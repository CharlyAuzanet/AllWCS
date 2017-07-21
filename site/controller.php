<?php
session_start();
define('ROOT', __DIR__); //Racine du projet
define('DS', DIRECTORY_SEPARATOR);

require_once (ROOT.DS.'conf'.DS.'_connect.php');

$destination_default = 'welcome';

$classname = 'Users';

require CLASSDIR.DS.$classname.'.php';

$destination = filter_input(INPUT_GET, 'destination', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$destination = empty($destination)?$destination_default:$destination;


if(!empty($action)){
    require MODEL.DS.$action.'.php';
}


if (!file_exists(VIEWS.DS.$destination.'.php')){
    $destination= '404';
}













require VIEWS.DS.'page.php';
