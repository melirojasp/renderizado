<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
        "gerardo" => [
            "nombre" => "ESPINOSA PÉREZ GERARDO YAHIR",
            "chiste" => "¿Cómo se dice pelo sucio en chino?\nChin cham pu."
        ],
        "gabriela" => [
            "nombre" => "MARTÍNEZ SALINAS GABRIELA EDITH",
            "chiste" => "¿Cómo se dice pañuelo en japonés?\nSaka-moko."
        ],
        "angel" => [
            "nombre" => "MENDEZ ROMERO ANGEL YAEL",
            "chiste" => "¿Qué le dice un gusano a otro gusano?\nVoy a dar una vuelta a la manzana."
        ],
        "missael" => [
            "nombre" => "PÉREZ BARAJAS MISSAEL",
            "chiste" => "¿Por qué el libro de matemáticas está triste?\nPorque tiene demasiados problemas."
        ],
        "melisa" => [
            "nombre" => "ROJAS PÉREZ MELISA",
            "chiste" => "¿Qué hace un pez mago?\nNada por aquí, nada por allá"
        ],
        "jorge" => [
            "nombre" => "SOLIS MORALES JORGE AARÓN",
            "chiste" => "¿Cuál es el animal más antiguo?\nLa cebra, porque está en blanco y negro."
        ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["nombre"]);
  $chiste = htmlentities($modelo["chiste"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$chiste}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
