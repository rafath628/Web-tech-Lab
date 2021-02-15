<?php  
class MyCircle
{
    public $radius;
    public $area;
    public $pi;
    public function __construct()
    {
        echo "Object created!<br>";
        $this->radius=1;
        $this->area=0;
        $this->pi=3.14;
    }
    public function __destruct()
    {
        echo "Object deleted!<br>";
    } 

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;//3
    }

    public function Area()
    {
        $area =$this->pi* $this->getRadius() *$this->getRadius();

        echo "Calculated area is : " . $area;
        echo "<br>";
    }
}
$object = new MyCircle();
$object->setRadius(9);
$object->Area();
?>