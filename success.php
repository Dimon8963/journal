<?php

// Клас, що представляє студента
class Student {
    private $name; // Приватна зміна для зберігання імені студента
    private $id; // Приватна зміна для зберігання ідентифікатора студента

    // Конструктор класу, приймає ім'я та ідентифікатор студента
    public function __construct($name, $id) {
        $this->name = $name; // Записує передане ім'я до поля $name
        $this->id = $id; // Записує переданий ідентифікатор до поля $id
    }

    // Метод для отримання імені студента
    public function getName() {
        return $this->name; // Повертає збережене ім'я студента
    }

    // Метод для отримання ідентифікатора студента
    public function getId() {
        return $this->id; // Повертає збережений ідентифікатор студента
    }
}

// Клас, що представляє предмет
class Subject {
    private $name; // Приватне поле для зберігання назви предмету

    // Конструктор класу, приймає назву предмету
    public function __construct($name) {
        $this->name = $name; // Записує передану назву до поля $name
    }

    // Метод для отримання назви предмету
    public function getName() {
        return $this->name; // Повертає збережену назву предмету
    }
}

// Клас, що представляє запис в журналі успішності
class GradeEntry {
    private $student; // Приватна зміна для зберігання студента
    private $subject; // Приватна зміна для зберігання предмету
    private $grade; // Приватна зміна для зберігання оцінки

    // Конструктор класу, приймає об'єкти студента та предмету, а також оцінку
    public function __construct($student, $subject, $grade) {
        $this->student = $student; // Записує переданого студента до поля $student
        $this->subject = $subject; // Записує переданий предмет до поля $subject
        $this->grade = $grade; // Записує передану оцінку до поля $grade
    }

    // Метод для отримання об'єкта студента
    public function getStudent() {
        return $this->student; // Повертає збереженого студента
    }

    // Метод для отримання об'єкта предмету
    public function getSubject() {
        return $this->subject; // Повертає збережений предмет
    }

    // Метод для отримання оцінки
    public function getGrade() {
        return $this->grade; // Повертає збережену оцінку
    }
}

// Клас, що представляє журнал успішності
class GradeBook {
    private $entries = []; // Приватна зміна для зберігання записів в журналі

    // Метод для додавання запису в журнал
    public function addEntry($entry) {
        $this->entries[] = $entry; // Додає переданий запис до масиву $entries
    }

    // Метод для отримання всіх записів з журналу
    public function getEntries() {
        return $this->entries; // Повертає всі записи з журналу
    }
}

// Приклад використання

// Створення об'єктів студентів
$student1 = new Student("Іванов Іван", 1);
$student2 = new Student("Петров Петро", 2);

// Створення об'єктів предметів
$subject1 = new Subject("Математика");
$subject2 = new Subject("Фізика");

// Створення об'єктів записів в журналі успішності
$gradeEntry1 = new GradeEntry($student1, $subject1, 'A');
$gradeEntry2 = new GradeEntry($student1, $subject2, 'B');
$gradeEntry3 = new GradeEntry($student2, $subject1, 'C');
$gradeEntry4 = new GradeEntry($student2, $subject2, 'A');

// Створення об'єкту журналу успішності
$gradeBook = new GradeBook();

// Додавання записів до журналу успішності
$gradeBook->addEntry($gradeEntry1);
$gradeBook->addEntry($gradeEntry2);
$gradeBook->addEntry($gradeEntry3);
$gradeBook->addEntry($gradeEntry4);

// Отримання всіх записів з журналу та їх виведення
$entries = $gradeBook->getEntries();
$count = 1; // Лічильник

foreach ($entries as $entry) {
    echo $count . ". "; // Виведення номера
    echo $entry->getStudent()->getName() . " отримав оцінку " . $entry->getGrade() . " з предмету " . $entry->getSubject()->getName() . "\n";
    $count++; // Збільшення лічильника
}