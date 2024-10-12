# Interfaces

una interfaz define un contrato que una clse debe cumplir. Es decir, especifica los metodos que una clase debe implementar, sin proporcionar su implementacion concreta. Una interfaz es como un bluepirnt que define las operaciones que un objeto puede realizar.

## Caracteristicas de las interfaces en PHP

- Definicion de metodos: Las interfaces sis pueden declarar metodos publicos sin cuerpo (sin implementacion).
- Implementacion obligatoria: Todas las clases que implementan una interfaz deben definir todos los metodos declarados en la interfaz.
- Herencia multiple: Una clase puede implementar multiples interfaces, lo cual es una forma de herencia multiple.
- no tienen propiedades: Las interfaces no pueden contener propiedades.

## Definicion de una interfaz

Las interfaces se definen utilizando la clase `interface`.

```
interface EcampleInterface
{
    public function method1(#params);
    public function method2(#params);
}
```

## Implementacion de interfaz

Una clase que implementa una interfaz debe usar la palabra clave `implements` y proporcionar una implementacion para todos los metodos de la interfaz.

```
class ClassExample implements ExampleInterfaz
{
    public function method1 ($prams)
    {
        return "Implementacion de metodo 1"
    }

    public function method2($prams)
    {
        return "Implementacion de metodo 2"
    }
}

$object = new ClassExample();

$object->method1();
$object->method2();
```

