<?php

class Subject
{
    private $id; // Змінна для зберігання ідентифікатора предмету
    private $subjectName; // Змінна для зберігання назви предмету

    /**
     * Конструктор класу Subject.
     *
     * @param int $id Ідентифікатор предмету
     * @param string $subjectName Назва предмету
     */
    public function __construct($id, $subjectName) {
        $this->id = $id; // Ініціалізація ідентифікатора
        $this->subjectName = $subjectName; // Ініціалізація назви предмету
    }

    /**
     * Отримати назву предмету.
     *
     * @return string Назва предмету
     */
    public function getName() {
        return $this->subjectName;
    }

    /**
     * Отримати ідентифікатор предмету.
     *
     * @return int Ідентифікатор предмету
     */
    public function getId() {
        return $this->id;
    }

}
