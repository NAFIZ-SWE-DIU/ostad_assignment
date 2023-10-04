<?php
function sortGradesDescending(&$grades) {
    rsort($grades);
}

$grades = [85, 92, 78, 88, 95];
sortGradesDescending($grades);
print_r($grades);
?>
