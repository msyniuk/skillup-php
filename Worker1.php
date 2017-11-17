<?php

class Worker1
{
    private $name;
    private $age;
    private $salary;

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function setSalary($salary){
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
