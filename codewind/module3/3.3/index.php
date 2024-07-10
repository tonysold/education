<?php
//создаём класс
class Employee 
{
    public $name;
    public $age;
    public $salary;

    public function getSalary() {
        return $this->salary . '$';
    }
//делаем конструктор, чтобы в дальнейшем писать дофига кода
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        
    }
}
//создаём экзмепляр класса
$employee = new Employee('John', 25, 800);
//выводим тестовое сообщение
echo 'Зарплата работника ' . $employee->name . ' составляет: ' . $employee->getSalary();