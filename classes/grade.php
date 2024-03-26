<?php

class Grade
{
    private $id; // Ідентифікатор оцінки
    private $student_id; // Ідентифікатор студента, якому поставили оцінку
    private $subject_id; // Ідентифікатор предмету, за який поставили оцінку
    private $grade; // Оцінка
    private $date; // Дата оцінювання

    public function __construct($id, $student_id, $subject_id, $grade, $date) { // початкові значення об'єктів
        $this->id = $id;
        $this->student_id = $student_id;
        $this->subject_id = $subject_id;
        $this->grade = $grade;
        $this->date = $date;
    }

    // Метод для отримання оцінки
    public function getGrade() {
        return $this->grade;
    }
}
