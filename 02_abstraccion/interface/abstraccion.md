# Abstraccion

En la POO, la abstraccion es un principio funcdamental que se referiere a la capacidad de definir la estructura y comportamiento esenciales de una entidad sin especificar los detalles completos de su implementacion, En terminos simples, ==la abstraccion permite enfocarse en lo que hace un objeto en lugar de como lo hace==.

## Interfaces

Una interfaz en php define un contrato que una clase debe cumplir, especifica los metodos que una clase debe implemetnar, sin proporcionar una implementacion concreta.

Las interfaces no pueden contener ninguna implementacion de metodos, solo la declaracion de los mismos. Las clases pueden implementar multiples interfaces, lo que permite la herencia multiple de comportamientos.

- Sintaxis

Declararemos lo que necesitamos como resultado final.

```
Interface NombreInterface
{
    public function nombre_metodo1();
    public function nombre_metodo2();

}
```

## Implementacion de interface en una clase

```
class MiClase implements NmobreInterface
{
    private $propiedad1;
    private $propiedad2;

    publicn function __construct ($propiedad1, $propiedad2)
    {
        $this->porpiedad1 = $propiedad1
        $this->porpiedad2 = $propiedad2
    }

    public function nombre_metodo1()
    {
        // Logica ...
    }

    public function nombre_metodo2()
    {
        // Logica ...
    }

}
```

Se hace uso de la palabra reservada implements seguido del nombre de la interface, para indicar que la clase debe respetar el contrato de dicha interface.