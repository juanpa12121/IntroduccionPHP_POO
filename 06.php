<?php include 'includes/header.php';

interface TransporteInterfaz{ //Dice que funciones hay y que retorna
    public function getInfo() : string;
    public function getRuedas() : int;
}

//Clase PADRE (Sólo de PLANTILLA, por eso abstract)
class Transporte implements TransporteInterfaz {
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


include 'includes/footer.php';