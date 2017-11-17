<?php

class Student extends User
{
    private $grants;
    private $yearNumber;

    public function setGrants($grants){
        $this->grants = $grants;
    }

    public function getGrants(){
        return $this->grants;
    }

    public function setYearNumber($yearNumber){
        $this->yearNumber = $yearNumber;
    }

    public function getYearNumber(){
        return $this->yearNumber;
    }

}
