<?php

session_start();
require_once('config.php'); 
$_SESSION['working_dir'] = __DIR__;
$_SESSION['userName'] = 'kas';
$_SESSION['userPassword'] = 'po';
setcookie('name', __DIR__, time()+3600, "/","", 0);

    
