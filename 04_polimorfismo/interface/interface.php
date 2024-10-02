<?php
interface FigureInterface
{
    public function calcArea();
}

class Circle implements Figureinterface
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function calcArea()
    {
        return pi() * pow($this->radio, 2);
    }
}

class Rectangle implements FigureInterface
{
    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calcArea()
    {
        return $this->base * $this->height;
    }
}


$circle = new Circle(5);
$rectangle = new Rectangle(3,8);

$figures = [$circle, $rectangle];

foreach ($figures as $figure){
    echo "El area es: {$figure->calcArea()} <br>";
}

?>