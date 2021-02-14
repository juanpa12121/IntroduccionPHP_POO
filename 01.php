<?php include 'includes/header.php';

// Crear clase
class Producto{
    //Definir atributos o propiedades
    public $nombre;
    public $precio;
    public $disponible;
}

// Instanciar clase
$producto = new Producto();

//Asignar valores
$producto->nombre = "Tablet";
$producto->precio = 200;
$producto->disponible = true;

//Acceder a sus valores
var_dump($producto->nombre);
// var_dump($producto->precio);
// var_dump($producto->disponible);

echo "<pre>";
var_dump($producto);
echo "</pre>";


$producto2 = new Producto();
$producto2->nombre = "Celular";
$producto2->precio = 800;
$producto2->disponible = false;

echo "<pre>";
var_dump($producto2);
echo "</pre>";



include 'includes/footer.php';
