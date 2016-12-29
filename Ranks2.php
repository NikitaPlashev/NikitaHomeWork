<?php

//looping through file
function increase ($value) {


//foreach (file($argv[1]) as $value) {

    //creating or reseting variables
    $result = [];
    $rank = 1;
    $ranks = [$rank];

    //getting numbers to process
    list($a, $b) = array_map('intval', explode(',', $value));
    //echo ("$a \n");
    //echo ("$b \n");
    //defining ranks used in final multiplier
    while($b * ($rank * 10) < $a) {
        $rank *= 10;
        $ranks[] = $rank;
    }
    $ranks = array_reverse($ranks);
    //print_r($ranks);
    //defining exact multiplier for each rank
    
    function ranks($rank) {
    
    
    //foreach ($ranks as $rank) {
    $multiplier = isset($result[$rank]) ? $result[$rank] : 1;

        while(($rank * ($multiplier + 1) * $b) < $a) {
            $multiplier++;
        }
        $result[$rank] = $multiplier;
        if($rank != 1) {
            $result[$rank * 0.1] = $multiplier * 10;
        }
     return $b * ($result[1]+1);
    
    array_map (ranks, $multiplier);
    return $multiplier;
    
    } 
    
$result = array_map(increase, file($argv[1]));
return $result;
    }
print($result);