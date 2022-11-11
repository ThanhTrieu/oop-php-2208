<?php

namespace App\Trait;

trait A 
{
    public $name = 'Teo';
    protected $age = 20;
    public function getName()
    {
        return $this->name;
    }
}
// $a = new A;
// echo $a->getName();
// sai