<!-- Сделайте класс Programmer, который будет наследовать от класса Employee.
Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист.
Сделайте также геттер и сеттер для этого свойства. Файл архива с веб-приложением загрузить в качестве ответа на задание. -->
<?php

class Employee
{
    public $name;
    public $age;
    public $salary;
}

class Programmer extends Employee
{
    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    private $langs;

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($langs)
    {
        $this->langs = $langs;
    }
}

$dude = new Programmer('John', 25, 800);
$dude->setLangs(['PHP', 'CSS', 'HTML', 'JS']);

echo "Работник с именем $dude->name, которому $dude->age лет, получает ЗП $dude->salary владет языками: ";
echo implode(', ', $dude->getLangs());