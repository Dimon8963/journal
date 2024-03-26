<?php

class Attendance
{
    private $id; // Ідентифікатор відвідуваності
    private $student_id; // Ідентифікатор студента
    private $date; // Дата відвідування
    private $status; // Статус відвідування

    public function __construct($id, $student_id, $date, $status) {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->date = $date;
        $this->status = $status;
    }

    // Метод для отримання статусу відвідуваності
    public function getStatus() {
        return $this->status;
    }

    // Метод для отримання дати відвідування
    public function getDate() {
        return $this->date;
    }
}
