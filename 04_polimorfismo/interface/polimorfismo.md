# Polimorfismo

El polimorfismo a traves de interfaces se produce cuando multiples clases implementan la misma interfaz. Cada clase proporciona su propia implementacion de los metodos definidos en la interfaz, lo que significa que un mismo metodo puede tener diferentes comportamientos en diferentes clases. Esto permite tratar objetos de diferentes clases como si fueran del mismo tipo, siempre y cuando implementen la misma interfaz.

## Ejemplo practico

- Crearemos la interface llamada `FigureInterface`, que tendra  el metodo `calcArea()`

```
interface FigureInterface
{
    public function calcArea();
}
```

Ahora podemos crear varias clases que implementen esta interfaz, como un circulo, un rectangulo y un triangulo. Cada una con su propia implementacon del metodo `calcArea()`.

```
class Circle implements Figureinterface
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function calcArea()
    {
        return pi() * pow($this->radio, 2)
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
```

en este caso el polimorfismo funciona por medio de dos explicaciones.

- Multiples implementaciones: Cada clase proporciona su propia implementacion al metodo `calcArea()`.
- Tratamiento uniforme: Aunque ambas clases `Circle` y `Rectangle` representan figuras geometricas diferentes, ambas pueden ser tratadas como objetos de tipo `FigureInterface`. 

```
$circle = new Circle(5);
$rectangle = new Rectangle(3,8);

$fig = [$circle, $rectangle];

foreach ($fig as $item){
    echo "El area es: {$item->calcArea()} <br>";
}
```