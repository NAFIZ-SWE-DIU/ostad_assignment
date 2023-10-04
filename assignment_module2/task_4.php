<?php
function printFibonacci($n) {
    $a = 0;
    $b = 1;
    $count = 0;

    while ($count < $n) {
        $fibonacci = $a + $b;
        echo $fibonacci . " ";

        $a = $b;
        $b = $fibonacci;
        $count++;
    }
}

$n = 15;
printFibonacci($n);
echo "\n";
