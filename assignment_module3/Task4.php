<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        echo "Student $student: Average Grade = $average\n";
    }
}

$studentGrades = [
    "Student1" => [85, 92, 78],
    "Student2" => [88, 95, 90],
    "Student3" => [75, 84, 88]
];

calculateAverageGrades($studentGrades);
?>