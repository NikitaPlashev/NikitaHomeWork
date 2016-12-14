<?php

echo "How much is in Odessa ruberoid?\n";
$handle = fopen ("php://stdin","r");
$price = fgets($handle);

if ($price >= 77) {
    echo "Expensive(((\n";
} elseif (($price > 45) && ($price < 77)) {
    echo "Want cheaper\n";
} elseif (($price > 30) && ($price < 45)) {
    echo "Cheap and cheerful\n";
} else echo "It is almost for nothing\n";

echo "\n";
if ($price > 300) {
    echo "Well, one can see that you are not with Odessa)))";
}