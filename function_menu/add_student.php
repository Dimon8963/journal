<?php

// Підключення необхідних класів
require_once './classes/student.php';
require_once './classes/subject.php';
require_once './classes/grade.php';
require_once './classes/attendance.php';
require_once './classes/teacher.php';

class RecordStudent {

    function addStudentRecord() {
        // Виведення повідомлення про додавання запису про студента
        echo "Додавання запису про студента:\n";

        // Отримання введених даних про студента
        $lastName = readline("Прізвище: ");
        $firstName = readline("Ім'я: ");
        $age = readline("Вік: ");
        $group = readline("Група: ");

        // Створення нового екземпляра класу Student
        $student = new Student(null, $lastName, $firstName, $age, $group);

        // Отримання даних про предмет
        $subjectId = readline("ID предмету: ");
        $subjectName = readline("Назва предмету: ");
        $subject = new Subject($subjectId, $subjectName);

        // Отримання даних про вчителя
        $teacherId = readline("ID вчителя: ");
        $teacherFirstName = readline("Ім'я вчителя: ");
        $teacherLastName = readline("Прізвище вчителя: ");
        $teacherEmail = readline("Email вчителя: ");
        $teacher = new Teacher($teacherId, $teacherFirstName, $teacherLastName, $teacherEmail);

        // Отримання даних про оцінку
        $gradeValue = readline("Оцінка: ");
        $gradeDate = readline("Дата оцінки: ");
        $grade = new Grade(null, null, $subjectId, $gradeValue, $gradeDate);  // Передаємо null для ID студента та ID оцінки

        // Отримання даних про відвідуваність
        $attendanceStatus = readline("Статус відвідуваності (yes/no): ");
        $attendanceDate = readline("Дата відвідування: ");
        $attendance = new Attendance(null, null, $attendanceDate, $attendanceStatus);  // Передаємо null для ID студента та ID відвідування

        // Створення асоціативного масиву з отриманими даними про студента
        $studentData = array(
            "lastName" => $student->getLastName(),
            "firstName" => $student->getFirstName(),
            "age" => $student->getAge(),
            "group" => $student->getGroup(),
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

        // Збереження даних про студента в файлі JSON
        $jsonData = json_encode($studentData);
        file_put_contents("students.json", $jsonData . PHP_EOL, FILE_APPEND);

        // Виведення повідомлення про успішне додавання запису про студента
        echo "Запис про студента додано!\n";
    }

}