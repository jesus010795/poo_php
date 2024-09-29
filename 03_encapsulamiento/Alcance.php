<?php
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

?>