<?php


echo "Choose your mark __";
$handle = fopen ("php://stdin","r");
$my_mark = fgets($handle);

if ($my_mark == 0) {
    echo "my_mark = 0";
} elseif ($my_mark == 1) {
    echo "my_mark = 1";
} elseif ($my_mark == 2) {
    echo "my_mark= 2 ";
} elseif ($my_mark == 3) {
    echo "my_mark= 3 ";
} elseif ($my_mark == 4) {
    echo "my_mark = 4";
} elseif ($my_mark == 5) {
    echo "My mark - 5. Good work)";
} elseif ($my_mark > 5) {
    echo "we have no mark such mark";
}    





