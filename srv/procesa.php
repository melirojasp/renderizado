<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";


$equipo = [
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
        "chiste" => "¿Por qué el libro de matemáticas está triste?\n Porque tiene demasiados problemas."
    ],
    "melisa" => [
        "nombre" => "ROJAS PÉREZ MELISA",
        "chiste" => "¿Que hace un pez mago?\n Nada por aqui, nada por alla"
    ],
    "jorge" => [
        "nombre" => "SOLIS MORALES JORGE AARÓN",
        "chiste" => "¿Cuál es el animal más antiguo?\nLa cebra, porque está en blanco y negro."
    ]  
];


$clave = recuperaTexto("integrante");

if (isset($equipo[$clave])) {
    $resultado = "Chiste de {$equipo[$clave]['nombre']}:\n\n{$equipo[$clave]['chiste']}";
} else {
    $resultado = "Integrante no encontrado o no seleccionado.";
}
devuelveJson($resultado);
