<?php

abstract class Car
{
    public $color;
    public $brand;
    public $type;
    public $condition = false; // cостояние


    public function ran()
    {
        $this->condition = true;
    }

    public function stop()
    {
        $this->condition = false;
    }

    public function checkRuning()
    {
        echo $this->condition ? ' В движении' : ' Стоит';
    }

}