<?php

/*password_hash*/

$contrasena = "contraseña1232";

$hash = password_hash($contraseña, PASSWORD_DEFAULT);

$ingreso = "contraseña123";

if(password_verify($ingreso, $hash)){
    echo "<br>";
    echo "contraseña correcta";
} else {
    echo "<br>";
    echo "contraseña incorrecta";
}


/*json encode*/

$datos = array(
    'nombre' => 'julian',
    'apellido' => 'vega',
    'edad' => 30,
);

var_dump($datos);

echo "<br><br>";

$datosNuevos = json_encode($datos);

var_dump($datosNuevos);


/*json decode */

$datos = '[
    {
        "nombre":"sebastian",
        "telefono":"3105669299"
    },
    {
        "nombre":"julian",
        "telefono":"3105669299"
    },
]';

var_dump($datos);

echo "<br><br>";

$datosNuevos = json_decode($datos, true);
foreach ($datosNuevos[0] as $key => $value) {
    echo $value;
}

/*COOKIES */

setCookie("EjemploCookie", "Hola Mundo");
setcookie("EjemploCookie2", "Estoy en php", strtotime('2023-12-31 23:59:59'));
setcookie("EjemploCookie3", "Estoy aprendiendo php", time() + 3600);

echo "Mi primera Cookie es:" . $_COOKIE["EjemploCookie"];
echo "Mi segunda Cookie es:" . $_COOKIE["EjemploCookie2"];
echo "Mi tercera Cookie es:" . $_COOKIE["EjemploCookie3"];

/* $_SESSION  */

$_SESSION['usuario'] ="Andres";
$_SESSION['contrasena'] = "Andres23123";

echo "El usuario es:" . $_SESSION['usuario '];
echo "El contrasena es:" . $_SESSION['contrasena '];

/* sanitizacion */

$codigo_script = '<script>("Hola soy un script enano");</script>';

echo $codigo_script;

$Ejemplo_sanidad = filter($codigo_script, FILTER_SANITIZE_STRING);

echo $Ejemplo_sanidad;

/*  $_SERVER */

$URL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$NAME = $_SERVER['SCRIPT_NAME'];
$PORT = $_SERVER['SCRIPT_PORT'];
$PROTOCOLO = $_SERVER['SERVER_PROTOCOL'];

echo $URL;
echo $NAME;
echo $PORT;
echo $PROTOCOLO;

/*String Functions*/

$dato = 'Hello world';
echo "ejemplo de strlen" . strlen($dato);

echo "<br>";

$dato2 = 'Hello world';
echo "ejemplo de strpos" . strpos($dato2, "de");

echo "<br>";

$dato3 = 'Hello world';
echo "ejemplo de str_replace" . str_replace("Back", "front", $dato3);

echo "<br>";

$dato4 = 'Hello world';
echo "ejemplo de STrTolower" . STrTolower($dato4);

echo "<br>";

$dato5 = 'Hello world';
echo "ejemplo de STrToUppER" . STrToUppER($dato5);

echo "<br>";

$dato6 = 'Hello world';
echo substr($dato6, 0, 5);

/*Array_Filter*/

$estudiantes = array(
    array("nombre" => "andres", "edad" => 15),
    array("nombre" => "julian", "edad" => 12),
    array("nombre" => "maira", "edad" => 20),
    array("nombre" => "camilo", "edad" => 24),
    array("nombre" => "sebas", "edad" => 57)
);

$estudiantes_menores = array_filter($estudiantes, function
($estudiantes){
    return $estudiantes['edad'] < 20;
});

print_r($estudiantes_menores);



?>