<?php

class Student
{
    private $id; // Змінна для зберігання ідентифікатора студента
    private $lastName; // Змінна для зберігання прізвища студента
    private $firstName; // Змінна для зберігання імені студента
    private $age; // Змінна для зберігання віку студента
    private $group; // Змінна для зберігання групи, до якої належить студент

    /**
     * Конструктор класу Student.
     *
     * @param int $id Ідентифікатор студента
     * @param string $lastName Прізвище студента
     * @param string $firstName Ім'я студента
     * @param int $age Вік студента
     * @param string $group Група, до якої належить студент
     */
    public function __construct($id, $lastName, $firstName, $age, $group) {
        $this->id = $id; // Ініціалізація ідентифікатора
        $this->lastName = $lastName; // Ініціалізація прізвища
        $this->firstName = $firstName; // Ініціалізація імені
        $this->age = $age; // Ініціалізація віку
        $this->group = $group; // Ініціалізація групи
    }

    /**
     * Отримати прізвище студента.
     *
     * @return string Прізвище студента
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Отримати ім'я студента.
     *
     * @return string Ім'я студента
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Отримати вік студента.
     *
     * @return int Вік студента
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Отримати групу студента.
     *
     * @return string Група студента
     */
    public function getGroup() {
        return $this->group;
    }
}
