<?php

class CheckIdStudent
{
    // Функція для перевірки наявності студента за його ID у файлі JSON
    public function checkStudentExists($studentId)
    {
        $jsonData = file_get_contents("students.json");
        $students = explode(PHP_EOL, $jsonData);
        foreach ($students as $student) {
            if (!empty($student)) {
                $studentData = json_decode($student, true);
                if ($studentData["id"] == $studentId) {
                    return array(
                        "lastName" => $studentData["lastName"],
                        "firstName" => $studentData["firstName"],
                        "age" => $studentData["age"],
                        "group" => $studentData["group"]
                    );
                }
            }
        }
        // Якщо студента з введеним ID не знайдено, повертаємо null
        return null;
    }

}