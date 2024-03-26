<?php

class AllStudents
{
    public function displayAllStudents() {
        echo "Список студентів:\n";
        $jsonData = file_get_contents("students.json");
        $students = explode(PHP_EOL, $jsonData);
        foreach ($students as $student) {
            if (!empty($student)) {
                $studentData = json_decode($student, true);
                echo "Прізвище: " . $studentData["lastName"] . "\n";
                echo "Ім'я: " . $studentData["firstName"] . "\n";
                echo "Вік: " . $studentData["age"] . "\n";
                echo "Група: " . $studentData["group"] . "\n";
                echo "Предмет: " . $studentData["subject"]["name"] . "\n";
                echo "Вчитель: " . $studentData["subject"]["teacher"]["firstName"] . " " . $studentData["subject"]["teacher"]["lastName"] . "\n";
                echo "Email вчителя: " . $studentData["subject"]["teacher"]["email"] . "\n";
                echo "Оцінка: " . $studentData["grade"]["value"] . "\n";
                echo "Дата оцінки: " . $studentData["grade"]["date"] . "\n";
                echo "Статус відвідуваності: " . $studentData["attendance"]["status"] . "\n";
                echo "Дата відвідування: " . $studentData["attendance"]["date"] . "\n";
                echo "--------------------------------\n";
            }
        }
    }
}