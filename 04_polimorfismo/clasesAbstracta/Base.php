<?php

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

$jesus = new Developer("Jesus Cruz");
$martha = new Admin("Martha Estudillo");


echo $jesus->login();
echo $martha->login();

?>