<?php
    $name = "rocky the eridian";
    echo $name;
    echo "\n";
    echo "i am $name";
    
    $array = [1, "integer", null];
    echo "\n";
    echo $array[1];

    echo "\n";
    echo "Hi " .$name;

    $cash = 1500000; // corruption money
    echo $cash <=> 500000;

    $score = 70;
    if ($score > 90) {
        echo "smarty pants";
    } else if ($score > 75) {
        echo "ok";
    } else {
        echo "missing braincells, might have ASD";
    }

    echo "\n";
    $integer = 2;
    $isEven = $integer % 2 == 0 ? "even" : "odd";
    echo $isEven;

    echo "\n";
    $integer = 9368214013471235647014923150474132650473129847890312964732197460237846127034014513204139247135864128374830412384723195482134237501469237164120401274681273;
    switch (true) {
        case ($integer > 0):
            echo "positive";
            break;
        case ($integer < 0) :
            echo "megative";
            break;
        default:
            echo "0";
    }

    for ($i=5; $i>0; $i--) {
        echo "Countdown : $i\n";
    }

    $count = 0;
    while ($count > 0) {
        echo "Count : $count\n";
        $count--;
    }
    
    $count2 = 0;
    do {
        echo "Count : $count2\n";
        $count2--;
    } while ($count2 > 0);

    $intArray = [1,2,3,4,5];
    foreach ($intArray as $i) {
        echo $i * 2;
    }

    function compare(int $a, int $b): string {
        if ($a > $b) {
            return "a is bigger";
        } else {
            return "b is bigger";
        }
    }

    echo compare(3,4);
?>