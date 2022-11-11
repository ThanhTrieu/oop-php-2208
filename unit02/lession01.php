<?php
// chong ke thua - khong cho class khac duoc ke thua
// su dung keyword final

final class A
{
    public $name = 'Teo';

    public function getName() 
    { 
        return $this->name;
    }
}

/*
class B extends A
{
    // loi vi class A la final thi cac class khac khong the truc tiep ke thua no dc
}
*/

$a = new A; // loi vi dang ke thua bat hop phap class A
echo $a->getName();