<?php


unset($_SESSION['userName']);
unset($_SESSION['userPassword']);
unset($_SESSION['logged_in']);
echo "LOGOUT";
header('Location: /login');
exit;