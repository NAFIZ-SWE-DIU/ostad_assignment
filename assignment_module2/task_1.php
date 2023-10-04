<?php 

function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

$start = 2;
$end = 20;
$step = 2;
printEvenNumbers($start, $end, $step);
echo "\n";


function printEvenNumbersWhile($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

$start = 2;
$end = 20;
$step = 2;
printEvenNumbersWhile($start, $end, $step);
echo "\n";


function printEvenNumbersDoWhile($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

$start = 2;
$end = 20;
$step = 2;
printEvenNumbersDoWhile($start, $end, $step);
echo "\n";


echo "0";