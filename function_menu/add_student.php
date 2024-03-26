<?php

// Підключення необхідних класів
require_once './classes/student.php';
require_once './classes/subject.php';
require_once './classes/grade.php';
require_once './classes/attendance.php';
require_once './classes/teacher.php';

class RecordStudent
{

    function addStudentRecord() {
        echo "Додавання запису про студента:\n";

        $studentId = readline("ID студента: ");
        $studentExists = $this->checkStudentExists($studentId);

        // Оголошення змінних для збереження даних про студента
        $lastName = null;
        $firstName = null;
        $age = null;
        $group = null;

        if ($studentExists) {
            echo "Студент з ID $studentId вже існує: " . $studentExists['lastName'] . " " . $studentExists['firstName'] . "\n";
            // Присвоюємо значенням змінним $age та $group значення студента, який вже існує
            $lastName = $studentExists['lastName'];
            $firstName = $studentExists['firstName'];
            $age = $studentExists['age'];
            $group = $studentExists['group'];
        } else {
            // Якщо студента з введеним ID не знайдено, ввести всі дані для нового запису
            $lastName = readline("Прізвище: ");
            $firstName = readline("Ім'я: ");
            $age = readline("Вік: ");
            $group = readline("Група: ");
        }

        $student = new Student($studentId, $lastName, $firstName, $age, $group);

        $subjectId = readline("ID предмету: ");
        $subjectName = readline("Назва предмету: ");
        $subject = new Subject($subjectId, $subjectName);

        $teacherId = readline("ID вчителя: ");
        $teacherFirstName = readline("Ім'я вчителя: ");
        $teacherLastName = readline("Прізвище вчителя: ");
        $teacherEmail = readline("Email вчителя: ");
        $teacher = new Teacher($teacherId, $teacherFirstName, $teacherLastName, $teacherEmail);

        $gradeValue = readline("Оцінка: ");
        $gradeDate = readline("Дата оцінки: ");
        $grade = new Grade(null, $studentId, $subjectId, $gradeValue, $gradeDate);

        $attendanceStatus = readline("Статус відвідуваності (yes/no): ");
        $attendanceDate = readline("Дата відвідування: ");
        $attendance = new Attendance(null, $studentId, $attendanceDate, $attendanceStatus);

        $studentData = array(
            "id" => $studentId,
            "lastName" => $student->getLastName(),
            "firstName" => $student->getFirstName(),
            "age" => $student->getAge(), // Використовуємо значення $age змінної
            "group" => $student->getGroup(), // Використовуємо значення $group змінної
            "subject" => array(
                "id" => $subjectId,
                "name" => $subjectName,
                "teacher" => array(
                    "id" => $teacher->getId(),
                    "firstName" => $teacher->getFirstName(),
                    "lastName" => $teacher->getLastName(),
                    "email" => $teacher->getEmail()
                )
            ),
            "grade" => array(
                "value" => $gradeValue,
                "date" => $gradeDate
            ),
            "attendance" => array(
                "status" => $attendanceStatus,
                "date" => $attendanceDate
            )
        );

        $jsonData = json_encode($studentData);
        file_put_contents("students.json", $jsonData . PHP_EOL, FILE_APPEND);

        echo "Запис про студента додано!\n";
    }


    // Функція для перевірки наявності студента за його ID у файлі JSON
    private function checkStudentExists($studentId)
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