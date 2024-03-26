<?php

class Menu {
    public function displayMenu() {
        echo "1. Додати запис про студента\n";
        echo "2. Показати всіх студентів\n";
        echo "3. Показати середній бал успішності студентів\n";
        echo "4. Вийти\n";
        echo "Введіть номер опції: ";
    }

    public function processChoice($choice) {
        switch ($choice) {
            case '1':
                require_once './function_menu/add_student.php'; // Підключаємо файл з класом RecordStudent
                (new RecordStudent)->addStudentRecord(); // Викликаємо метод addStudentRecord з класу RecordStudent
                break;
            case '2':
                require_once './function_menu/all_students.php'; // Підключаємо файл з класом AllStudents
                (new AllStudents)->displayAllStudents(); // Викликаємо метод displayAllStudents з класу AllStudents
                break;
            case '3':
                require_once './function_menu/average_grade.php';
                break;
            case '4':
                $this->inout();
                break;
            default:
                echo "Невідома опція. Спробуйте ще раз.\n";
        }
    }

    public function inout() {
        echo "До побачення!\n";
        exit;
    }

}




