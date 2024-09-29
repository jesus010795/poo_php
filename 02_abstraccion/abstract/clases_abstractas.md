# Clases abstractas

Una clase abstracta en PHP es una clase que no puede ser instanceada directamente. Solo puede ser utilizada para otras clases. Las clases abstractas pueden contener metodos abstractos, que son metodos declarados pero no implementados, y metodos concretos, que si tienen implementacion. Las subclasesque extienden de una clase abstracta deben implementar todos los metodos abstractos.

- Sintaxis

Un metodo abstracto puede o no definirse.

```
abstract class ClaseAbstracta
{
    protected $prop1;

    public function __construct($pop1)
    {
        $this->prop1 = $prop1;
    }

    public function metodo1()
    {
        //...
    }

    // Los metodos abstractos solo se declaran per no se definen o implementan
    abstract public function store();

}
```

## Utilizacion de clase abstracta

Al crear una clase a partir de una clase abstracta es obligatorio implementar el metodo abstracto definido en la clase abstracta

```
class OtraClase extends ClaseAbstracta
{
    public function metodos1()
    {
        //... codigo
    }

    public function store()
    {
        //....
    }
}

```
