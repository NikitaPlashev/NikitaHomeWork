<?php

echo "what mark do you want?\n";  
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

echo ($mark == 5) ? "It is right!!!" : "Will not put you to better than 5";
 