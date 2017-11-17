<?php

class Driver extends Worker2
{
    private $drivePeriod;
    private $category;

    public function setDrivePeriod($drivePeriod){
        $this->drivePeriod = $drivePeriod;
    }

    public function getDrivePeriod(){
        return $this->drivePeriod;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

}
