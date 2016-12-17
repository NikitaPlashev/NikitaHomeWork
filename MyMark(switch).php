<?php


echo "Choose mark__";
$handle = fopen ("php://stdin","r");
$my_mark = fgets($handle);

switch ($my_mark) {
case 0:
    echo "my_mark=0";
    break;
case 1:
    echo "my_mark=1";
    break;
case 2:
    echo "my_mark=2";
    break;
case 3:
    echo "my_mark=3";
    break;
case 4:
    echo "my_mark=4";
    break;
case 5:
    echo "I have 5 for homework. Cool)))";
    break;    
default:
    echo "Such mark is not real";
}

