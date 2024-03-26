<?php

class Teacher
{
    private $id; // Змінна для зберігання ідентифікатора вчителя
    private $firstName; // Змінна для зберігання імені вчителя
    private $lastName; // Змінна для зберігання прізвища вчителя
    private $email; // Змінна для зберігання email вчителя
    /**
     * Конструктор класу Teacher.
     *
     * @param int $id Ідентифікатор вчителя
     * @param string $firstName Ім'я вчителя
     * @param string $lastName Прізвище вчителя
     * @param string $email Email вчителя
     */
    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id; // Ініціалізація ідентифікатора вчителя
        $this->firstName = $firstName; // Ініціалізація імені вчителя
        $this->lastName = $lastName; // Ініціалізація прізвища вчителя
        $this->email = $email; // Ініціалізація email вчителя
    }

    /**
     * Отримати ідентифікатор вчителя.
     *
     * @return int Ідентифікатор вчителя
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Отримати ім'я вчителя.
     *
     * @return string Ім'я вчителя
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Отримати прізвище вчителя.
     *
     * @return string Прізвище вчителя
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Отримати email вчителя.
     *
     * @return string Email вчителя
     */
    public function getEmail()
    {
        return $this->email;
    }

}
