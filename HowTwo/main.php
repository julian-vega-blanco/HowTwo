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

/*COOKIE */


?>