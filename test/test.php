<?php
   setcookie('name', 'Mindaugas', time()+3600, "/","", 0);
   setcookie('age', '12', time()+3600, "/", "",  0);
   echo $_COOKIE['age'] . "<br />";
   echo $_COOKIE['name'] . "<br />";


