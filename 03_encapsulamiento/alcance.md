# Encapsulamiento

Es un principio que consuste en agrupar datos y metodos dentro de una clase y controlar el acceso a ellos. Es decir, se oculta la implementacion interna de un objeto, exponiendo solo  una interfaz publica para interacturar con el.

- **Importancia del encapsulamiento**

    - Seguridad: Protege los datos de moppdificaciones no intencionales.
    - Mantenibilidad: Facilita la modificacion del codigo interno sin afectar a otras partes del programa.
    - Reusabilidad: Permite crear objetos mas robustos y reutilizables.
<br>
- **Sintaxis**

    ==En php el encapsulamiento se logra utilizando los modificadores de acceso==:

    - **public**: Los miembros (propiedades y metodos) marcados como `public` son eaccesibles desde cualquier parte del codigo.
    - **protected**: Los miembros marcados como `protected` son accesiles desde la clase donde se definen y desde sus clases hijas.
    - **private**: Los miembros marcados como `private` solo son accesibles desde dentro de la clase donde se difinen.
<br>
- **Ejemplo**

```
class Person 
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Metodo para obtener el nombre
    public function getName()
    {
        return $this->name;
    }

    //Metodo para establecer el nombre
    public function setName($name)
    {
        if(is_string($name) && strlen($name) > 0){
            $this->name = $name;
        } else {
            throw new Exception(("Nombre no valido"));
        }
    }

    // Los metodos para obtener y setear la edad deberian ser muy parecidos.
}
```

- Propiedades Privadas:

`$nombre` y `$edad` son propiedades privadas. Esto significa que no se pueden acceder directamente desde fuera de la clase Persona.

- Métodos Públicos:

`getNombre()` y `getEdad()` son métodos públicos que permiten acceder a las propiedades privadas `$nombre` y `$edad`.
`setNombre($nombre)` y `setEdad($edad)` son métodos públicos que permiten modificar las propiedades privadas `$nombre` y `$edad`. Estos métodos incluyen validación para asegurar que los datos sean válidos antes de asignarlos a las propiedades.

- Constructor:

El método constructor `__construct($nombre, $edad)` permite inicializar los valores de las propiedades `$nombre` y `$edad` cuando se crea una instancia de la clase Persona.

- **Encapsulamiento en Acción**:

Los métodos `setNombre()` y `setEdad()` controlan cómo se pueden modificar las propiedades `$nombre` y `$edad`, asegurando que siempre se asignen valores válidos. ==Esto protege las propiedades de asignaciones inválidas y mantiene la integridad de los datos==.