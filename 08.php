<?php include 'includes/header.php';
// Se recomienda tener UNAclase por archivo



//NO NECESARIO PARA INCLUIR
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

// Incluir las otras clases
function mi_autoload($clase){ //Para importar automatica/ las clases que voy requiriendo
    require  __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('mi_autoload');

// Con lo anterior, ya podremos instanciar de Clientes y Detalles
$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';