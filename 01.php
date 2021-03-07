<?php
declare (strict_types = 1);
include 'includes/header.php';

// this evita que se revuelvan los objetos y que cada atributo que se va añadiendo a la clase,
//se guarde donde debería

// Crear clase
class Producto{

    // **NO SE REQUIERE EN PHP 8 ** //------------------------------------
    //Definir atributos o propiedades
    // public $nombre;
    // public $precio;
    // public $disponible;

    //El constructor se manda a llamar automatica/ cuando se le da new Producto
    //this: para referirse al objeto que estoy creando
    // public function __construct(string $nombre, int $precio, bool $disponible)
    // {
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    //     $this->disponible = $disponible;
    // }
    // **NO SE REQUIERE EN PHP 8 ** //------------------------------------


    // PHP 8 (menos código) ***********************************************************************
    // Public es un modificador de acceso
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    //Metodos
    public function mostrarProducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: $" . $this->precio;
    }

    // This hace ref a los atributos que fueron agrgados en el objeto creado en la clase
}

// Instanciar clase
$producto = new Producto('Tablet', 200, true); 
$producto->mostrarProducto();


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
$producto2->mostrarProducto();
// $producto2->nombre = "Celular";
// $producto2->precio = 800;
// $producto2->disponible = false;

echo "<pre>";
var_dump($producto2);
echo "</pre>";



include 'includes/footer.php';
