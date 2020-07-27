<!-- Giải phương trình bậc hai -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc hai</title>
</head>
<body>
    <form action="" method="post">
    <h3>Giải phương trình bậc hai: ax<sup>2</sup>+bx+x=0 </h3>
    Nhập các hệ số: <br>
    a = <input type="text" name="a" size="5"/>
    b = <input type="text" name="b" size="5"/>
    c = <input type="text" name="c" size="5"/>
    <input type="submit" name="gui" value="Giải phương trình"/>
    </form><br><br>
</body>
</html>
<?php
class PhuongTrinhBacHai{
    protected $a = 1;
    protected $b = 3;
    protected $c = 2;

    private function Delta(){
        return pow($this->b,2)-4*$this->a*$this->c;
    }

    protected function giai(){
        if($this->Delta()<0) echo "PT Vo nghiem";
        else if ($this->Delta()==0)
            echo "Nghiem kep: x<sub>1</sub> = x<sub>2</sub> =".-$this->b/(2*$this->a);
        else{
            $x1 = (-$this->b-sqrt($this->Delta()))/2*$this->a;
            $x2 = (-$this->b+sqrt($this->Delta()))/2*$this->a;
            echo "PT co hai nghiem phan biet:<br>";
            echo "x<sub>1</sub> = ".$x1." - x<sub>2</sub> = ".$x2;
            
        }
    }

}

class PhuongTrinh extends PhuongTrinhBacHai{
    public function gpt(){
        return $this->giai();
    }
    public function seta($_a){
        $this->a = $_a;
    }
    public function setb($_b){
        $this->b = $_b;
    }
    public function setc($_c){
        $this->c = $_c;
    }

}

$q = new PhuongTrinh;
if(isset($_POST['gui'])){
    $q->seta($_POST['a']);
    $q->setb($_POST['b']);
    $q->setc($_POST['c']);
    $q->gpt();
}

    

?>