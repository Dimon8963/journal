<?php

function calculateAverageGrade() {
    $jsonData = file_get_contents("students.json");
    $students = explode(PHP_EOL, $jsonData);
    $totalGrade = 0;
    $studentCount = 0;
    foreach ($students as $student) {
        if (!empty($student)) {
            $studentData = json_decode($student, true);
            $totalGrade += intval($studentData["grade"]["value"]);  // Перетворення оцінки на число
            $studentCount++;
        }
    }
    if ($studentCount > 0) {
        $averageGrade = $totalGrade / $studentCount;
        return $averageGrade;
    } else {
        return 0;
    }
}

echo "Середній бал успішності студентів: " . calculateAverageGrade() . "\n";