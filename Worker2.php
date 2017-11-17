<?php

    class Worker2
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary){
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }

    private function checkAge($age){
        if ($age >= 1 && $age <= 100){
            return true;
        } else {
            return false;
        }
    }
}
