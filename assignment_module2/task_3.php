<?php
$a = 0;
$b = 1;
$count = 0;

while ($count < 10) {
    $fibonacci = $a + $b;
    
    if ($fibonacci > 100) {
        break;
    }
    
    echo $fibonacci . " ";
    
    $a = $b;
    $b = $fibonacci;
    $count++;
}
echo "\n";
