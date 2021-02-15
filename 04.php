<?php include 'includes/header.php';

// HERENCIA: Crear clase ppal, luego crearemos subclases que heredarán atributos y métodos

class Transporte{
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
// Creamos una SEGUNDA CLASE que HEREDE de Transporte
class Bicicleta extends Transporte { //HEREDAR ATRIBUTOS Y MÉTODOS DE TRANSPORTE

    public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA.";
    }   
}

// Creamos una TERCERA CLASE que HEREDE de Transporte
class Automovil Extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {    
    }

    public function getTransmision() : string {
        return $this->transmision;
    }

}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();


echo "<hr>"; //Línea separadora

$auto = new Automovil(4, 4, "Manual");
echo $auto->getInfo();
echo $auto->getTransmision();


include 'includes/footer.php';