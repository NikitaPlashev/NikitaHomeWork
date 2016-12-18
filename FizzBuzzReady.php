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

if (!($i % $Fizz))  {   
    if (!($i % $Buzz))  {  
    echo "FB"; 
    } else echo "F";
} elseif (!($i % $Buzz)){
    echo "B";
} else {
    echo $i;

}
echo "\n";
}
