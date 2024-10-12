# Herencia 

La herencia permite crear nuevas clases que reutilizan, extienden y modifican el comportamiento de clases existentes.

La clase que hereda se llama "clase hija" o "subclase", y la clase de la cual se hereda se llama "clase padre" o "superclase".

La clase hija hereda todas las propiedades y metodos de la clase padre, pudiendo ademas agregar nuevas propiedades y metodos o modificar los heredados, lo que promueve la reutilizacion de codigo y la organizacion modular del mismo.

## Ejemplo

Imaginemos un escenario en el que estamos desarrollando un sistema para gestionar empleados en una empresa. Podemos tenes una clase base `Empleado` y luego varias subclases que representan diferentes tipos de empleados, como `Ingeniero` y `Gerente`.


- clase Empleado

```
class Emlpoyee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function showData()
    {
        return echo "Nombre: $this->name - Salario: $this->salary";
    }
}
```

- clase Engineer

```
class Engineer extends Employee
{
    protected $job_position;

    public function __construct($name, $salary, $skill)
    {
        parent:: __construct($name, $salary);
        $this->skill = $skill;
    }

    public function showData()
    {
        return parent::showData() . "Especialidad: $this->skill";
    }

}
```

- Clase gerente

```
class Manager extends Employee
{
    public $department;

    public function __construct($name, $salary, $department)
    {
        prent::__construct($name, $salary);
        $this->department = $department;
    }

    publci function showData()
    {
        return parent::showData() . "Departamento: $this->department";
    }
}
```

- Utilizacion de clases

```
$engineer = new Engineer("Jesus", 234, "Programming");
$manager = new Manager("Linus", 876, "Software")


echo $engineer->showData();
echo $manager->showData();

```
