<?php include 'includes/header.php';

// Conectar a la BD con MySQLi en POO
// Ventajas: Performance y seguridad
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud'); //Objeto tendra todos los métodos

// 1. CREAMOS EL QUERY
$query = "SELECT titulo, imagen from propiedades";
// 2. LO PREPARAMOS
$stmt = $db->prepare($query); //Preparate para realizar la sgte consulta
// stmt: Sentencia preparada: Va a tener toda la info

//3. LO EJECUTAMOS
$stmt->execute(); //Ejecutamos el stmt

//4. CREAMOS LA VARIABLE
$stmt->bind_result($titulo, $imagen); //Va a crear automatica/ una vble con los resultados de la consulta

//5. ASIGNAMOS EL RESULTADO (Cuando es 1 resultado, de lo contrario saltar al paso 6)
//$stmt->fetch(); //Va a traerse la vble $titulo con la info de la consulta

//6. IMPRIMIMOS EL RESULTADO
var_dump($titulo);
var_dump($imagen);

while($stmt->fetch()): //Mientras hayan resultados
    echo "<pre>";
var_dump($titulo);
echo "</pre>";
endwhile;


include 'includes/footer.php';

// //Para multiples resultados, se debe iterar
// while($propiedad = $resultado->fetch_assoc()):
//     echo "<pre>";
//     var_dump($propiedad);
//     echo "</pre>";
// endwhile;

// //Para cuando sea 1 resultado
// echo "<pre>";
// var_dump($resultado->fetch_assoc()); //reemplaza a mysqli_fetch_assoc($resultado)
// echo "</pre>";
