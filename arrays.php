<?php
    $array = [1,2,3,4,5];
    array_push($array, 20);
    print_r($array); 
    array_unshift($array, 20);
    print_r($array); 
    echo in_array(20, $array);
    $name = "john bacon porkchop";
    $chopped = explode(" ", $name);
    print_r($chopped);
    $string = ["a", "v", "g", "r", "b", "maximus, destroyer of worlds or something idk ooh scaary"];
    sort($string);
    print_r($string);
?>