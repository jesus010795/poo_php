<?php
class Employee
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
        return "Nombre: $this->name - Salario: $this->salary";
    }
}

class Engineer extends Employee
{
    protected $job_position;

    public function __construct($name, $salary, $job_position)
    {
        parent:: __construct($name, $salary);
        $this->job_position = $job_position;
    }

    public function showData()
    {
        return parent::showData() . "Especialidad: $this->job_position";
    }
}

class Manager extends Employee
{
    public $department;

    public function __construct($name, $salary, $department)
    {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function showData()
    {
        return parent::showData() . "Departamento: $this->department";
    }
}


$engineer = new Engineer("Jesus", 234, "Programming");
$manager = new Manager("Linus", 876, "Software");


echo $engineer->showData();
echo "<br>";
echo $manager->showData();

?>