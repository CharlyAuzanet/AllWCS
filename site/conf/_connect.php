<?php
define('BDD_DRIVER', 'mysql');
define('BDD_SERVER', 'localhost');
define('BDD_USER', 'root');
define('BDD_MDP', 'jecode4bleau');
define('BDD', 'utilisateurs');

date_default_timezone_set('UTC');
setlocale(LC_TIME, 'fr_FR'.'UTF8');

//definition chemins absolus

define('MODEL', ROOT.DS.'model');
define('VIEWS', ROOT.DS.'views');
define('CLASSDIR', ROOT.DS.'class');
define('LOGS_DIR', ROOT.DS.'logs');

