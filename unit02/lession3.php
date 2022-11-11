<?php

class A
{
    public $myAge;
    public function __construct($age)
    {
        // tham so truyen vao method __construct
        $this->myAge = $age;
    }

    public function getAge()
    {
        return $this->myAge;
    }
}
$a = new A(20); // 20 : tham so dc nhan o __construct
// khi khoi tao doi tuong, ma truyen tham so vao - thi tham so do se dc nhan o method __construct trong class
echo $a->getAge();