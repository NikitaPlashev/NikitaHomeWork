<?php


$handle = fopen ("php://stdin","r");

echo "Enter Fizz number...";
$Fizz = fgets($handle);

echo "Enter Buzz number...";
$Buzz = fgets($handle);

echo "Enter your number please...";
$number = fgets($handle);


$i = 0;
while ($i < $number) {
$i=$i+1;

if(($i % $Fizz) == 0 && ($i % $Buzz) == 0){       
    echo "FB";
} elseif(($i % $Buzz) == 0){
    echo "B";
} elseif(($i % $Fizz) == 0){
    echo "F";
} else {
    echo $i;

}
echo "\n";
}
