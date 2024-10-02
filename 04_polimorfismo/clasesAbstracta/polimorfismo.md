# Polimorfismo

El polimorfismo es uno de los principipos fundamentales de la POO, que permite que objetos de diferentes clases sean tratados como objetos de una clase comun. 

En terminos simples, el polimorfismo permite que el mismo metodo tenga diferentes comportamietos dependiendo del objeto que lo invoque.

## Ejemplo

- Clase Base Base
    - Propiedad protegida `$name`: Almacena el nombre del objeto. Al ser protegida, puede ser accedida desde la clase base y sus clases hijas.
    - Método privado `getclassName()`: Utiliza la función `get_called_class()` para obtener el nombre de la clase que está llamando a este método. Esto permite determinar dinámicamente a qué clase pertenece un objeto.
    - Método público `login()`: Retorna un mensaje que incluye el nombre del objeto y la clase a la que pertenece. Este método será sobreescrito en las clases hijas.

```
abstract class Base 
{
    protected $name;

    private function getclassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es {$this->name} desde la clase {$this->getclassName()} <br>";
    }
}

```

- Clases Hijas Admin y Developer
    - Herencia: Ambas clases heredan de la clase base Base, lo que significa que heredan todas sus propiedades y métodos.
    - Constructores: Se utilizan para inicializar la propiedad $name al crear un objeto de estas clases.

```
class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Developer extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}
```

En este ejemplo se manifiesta el polimorfismo a traes de la sobreescritura de metodos.

- Metodo `login()`: Este metodo se define en la clase `Base` y se sobreescribe en las clases hioojas `Admin` y `Developer`. Aunque todas las lases tienen un metodo `login()`, cada una proporciona su popia implementacion.
- Comportamiento dinamico: Cuando se llama al metodo `login()` en un objeto, se ejecuta la version del metodo que corresponde a la clase de ese objeto. Esto permite que objetos de diferentes clases respondan de manera diferente al mismo mensaje.