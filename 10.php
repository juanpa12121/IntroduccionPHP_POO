<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO("mysql:host=localhost; dbname=bienesraices_crud", "root", "root");
//$db = new PDO('mysql:host=localhost', 'dbname=bienesraices_crud', 'root', 'root');

// 1. CREAMOS EL QUERY
$query = "SELECT titulo, imagen from propiedades";

//Consulta la BD e imprimir el resultado (sin sentencias preparadas)
//$propiedades = $db->query($query)->fetchAll();// (Sin sentencias preparadas)

// 2. LO PREPARAMOS
$stmt = $db->prepare($query); //Preparar la sentencia de la consulta

//3. LO EJECUTAMOS
$stmt->execute(); //Ejecutar sentencia preparada

//4. OBTENER LOS RESULTADOS En vez de crear la variable, se tiene un FETCH
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll se trae todo,
//pero lo trae como array asociativo y como posicion, para fixear AGREGAMOS dentro PDO::FETCH_ASSOC


// 5. ITERAR RESULTADOS, como es ARRAY con FOREACH
foreach($resultado as $propiedad):
    echo $propiedad["titulo"];
    echo "<br>";
    echo $propiedad["imagen"];
    echo "<br>";
endforeach;

//Lo muestra como array asociativo
// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";


include 'includes/footer.php';