<?php
//Khai báo và sử dụng class, các cơ chế get, set.
class PhepToan{
    private $a;
    protected $b;
    public $c=10;
    public $d=10;

    public function seta($bien_a){
        $this->a=$bien_a;
    }
    public function setb($bien_b){
        $this->b=$bien_b;
    }

    public function geta(){
        return $this->a;
    }

    public function getb(){
        return $this->b;
    }

    public function Tong($x, $y){
        return $x+$y;
    }
}

$Toan = new PhepToan;
$Toan->seta(15);
$Toan->setb(20);
echo $Toan->geta()." + ".$Toan->getb()." = ".$Toan->Tong($Toan->geta(), $Toan->getb())."<br>";

echo $Toan->c." + ".$Toan->d." = ".$Toan->Tong($Toan->c, $Toan->d);















?>