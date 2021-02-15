<?php include 'includes/header.php';

interface TransporteInterfaz{ //Dice que funciones hay y que retorna
    public function getInfo() : string;
    public function getRuedas() : int;
}

//Clase PADRE (Sólo de PLANTILLA, por eso abstract)
class Transporte implements TransporteInterfaz { //Clase que implementa la interfaz
    public function __construct(protected int $ruedas, protected int $capacidad)
    {    
    }

    public function getInfo() : string { //Retornará STRING
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {    
    }
    //Metodo para reescribirlo
    public function getInfo() : string { //Retornará STRING
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color;
    }

    //Metodo que NO existe en la interfaz (SI SE PUEDE TENER)
    public function getColor() : string {
        return "El color es: " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20) );
var_dump($auto = new Automovil(4, 4, "Rojo") );

echo $transporte->getInfo();
echo "<hr>";

echo $auto->getInfo();
echo "<hr>";

echo $auto->getColor();
echo "</pre>";


include 'includes/footer.php';