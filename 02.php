<?php
declare (strict_types = 1);
include 'includes/header.php';

// this evita que se revuelvan los objetos y que cada atributo que se va añadiendo a la clase,
//se guarde donde debería

//**********  MÉTODOS ESTÁTICOS *********************************************
    //No requiere instanciarse

// Crear clase
//Al poner public en la CLASE: Lo hace obligatorio
class Producto{

    public $imagen;
    // Tambien se pueden tener variables estaticas
    public static $imagenPlaceholder = "Imagen.jpg"; //Ej: Img que estará por default

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){ //Si hay una nueva imagen
            self::$imagenPlaceholder = $imagen; //Sobreescribirla
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto(){
        echo "Obteniendo datos del producto...";
    }

    //Metodos
    public function mostrarProducto() : void{
        echo "El producto es: " . $this->nombre . " y su precio es de: $" . $this->precio;
    }

    public function getNombre() : string{ //PARA PROTECTED (Poder acceder a el)
        return $this->nombre;
    }

    public function setNombre(string $nombre){//Sirve para modificar el objeto creado previamente
        $this->nombre = $nombre;
    }
}

//echo Producto::obtenerProducto();
//echo Producto::obtenerImagenProducto();

// Instanciar clase
$producto = new Producto('Tablet', 200, true, ""); //Se queda la imagen por DEFAULT
//$producto->mostrarProducto(); //CON PUBLIC

//$producto->nombre = "Nuevo nombre" //NO SE PUEDE USAR CON PROTECTED
// SE DEBE CREAR UN NUEVO MÉTODO DENTRO DE LA CLASE

echo $producto->obtenerImagenProducto();

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


$producto2 = new Producto('Monitor Curvo', 300, true, "MonitorCurvo.jpg"); //Entra al if y sobreescribe la img del método estático
//$producto2->mostrarProducto(); //CON PUBLIC
echo $producto2->getNombre(); //CON PROTECTED

echo $producto->obtenerImagenProducto();

// $producto2->nombre = "Celular";
// $producto2->precio = 800;
// $producto2->disponible = false;

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";


include 'includes/footer.php';
