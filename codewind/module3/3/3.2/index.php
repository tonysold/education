<?php

class User 
{
    public $name;
    public $age;

    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
}

$user1 = new User;
$user1->name = 'john';
$user1->age = 25;

$user1->setAge(30);

echo $user1->age;
