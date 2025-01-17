<?php include 'includes/header.php';

require 'vendor/autoload.php';
// Se recomienda tener UNA clase por archivo

//NO NECESARIO PARA INCLUIR
//Incluir otras clases
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;


// Incluir las otras clases (YA NO NECESARIO PORQUE LO HACE COMPOSER)
// function mi_autoload($clase){ //Para importar automatica/ las clases que voy requiriendo
//--    echo $clase; //R= App\Detalles, Pero hay que quitarle el App
        $partes = explode('\\', $clase); //Busque en el string "App\Detalles", la \
//--    crea un array con App y Detalles, en las pos 0 y 1 respectiva/

        require  __DIR__ . '/clases/' . $partes[1] . '.php';
// }
 spl_autoload_register('mi_autoload');

// class Clientes { //Clase que se repite
//     public function __construct()
//     {
//         echo "Desde 08.php que contiene los clientes";
//     }
// }

//En vez de hacer esto (se repite el App), se pone el use App arribita y se omiten aqui
// $detalles = new App\Detalles();
// $clientes = new App\Clientes(); 

// Con lo anterior, ya podremos instanciar de Clientes y Detalles
// Ya que autoload automatica/ itera y busca las clases que vamos a instanciar
$detalles = new Detalles();
$clientes = new Clientes(); //Clase ya no choca con la class Clientes de este archivo .php
//$clientes2 = new Clientes();  //Instancia de Clase que se repite

include 'includes/footer.php';