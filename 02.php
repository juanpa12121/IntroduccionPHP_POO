<?php
declare (strict_types = 1);
include 'includes/header.php';

// this evita que se revuelvan los objetos y que cada atributo que se va añadiendo a la clase,
//se guarde donde debería

// ENCAPSULACIÓN

// Crear clase
class Producto{

    //**Public: Se puede acceder y modificar en cualquier lugar (En CLASE o en OBJETO)
    //**Protected: Se puede acceder/modificar unicamente en la clase */
    //**Private: Solo miembros de la misma clase pueden acceder a el */
        //Private casi no cambia nada
        // (parecido a protected cuando se tiene 1 CLASE), tiene mas efecto en HERENCIA,
    // PHP 8 (menos código) (CLASE) ********************************************************************
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    //Metodos
    public function mostrarProducto() : void{
        echo "El producto es: " . $this->nombre . " y su precio es de: $" . $this->precio;
    }
    // This hace ref a los atributos que fueron agrgados en el objeto creado en la clase

    public function getNombre() : string{ //PARA PROTECTED (Poder acceder a el)
        return $this->nombre;
    }

    public function setNombre(string $nombre){//Sirve para modificar el objeto creado previamente
        $this->nombre = $nombre;
    }

 
}

// Instanciar clase
$producto = new Producto('Tablet', 200, true); 
//$producto->mostrarProducto(); //CON PUBLIC

//$producto->nombre = "Nuevo nombre" //NO SE PUEDE USAR CON PROTECTED
// SE DEBE CREAR UN NUEVO MÉTODO DENTRO DE LA CLASE

echo $producto->getNombre(); //CON PROTECTED
$producto->setNombre("Nuevo nombre");

//echo "El producto es: " . $producto->nombre . " y su precio es de: $" . $producto->precio; //Pero mejor los MÉTODOS

//Asignar valores
// $producto->nombre = "Tablet";
// $producto->precio = 200;
// $producto->disponible = true;

//Acceder a sus valores
//var_dump($producto->nombre);
// var_dump($producto->precio);
// var_dump($producto->disponible);

echo "<pre>";
var_dump($producto);
echo "</pre>";


$producto2 = new Producto('Monitor Curvo', 300, true);
//$producto2->mostrarProducto(); //CON PUBLIC
echo $producto2->getNombre(); //CON PROTECTED

// $producto2->nombre = "Celular";
// $producto2->precio = 800;
// $producto2->disponible = false;

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";



include 'includes/footer.php';
