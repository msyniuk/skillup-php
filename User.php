<?php

class User
{
    protected $name;
    protected $age;

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }


    private function checkAge($age){
        if ($age >= 1 && $age <= 100){
            return true;
        } else {
            return false;
        }
    }
}
