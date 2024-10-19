<?php
$edad = 16;
$sexo = 'masculino';

if ($sexo == 'femenino') {
    $pulsaciones = (220 - $edad) / 10;
} elseif ($sexo == 'masculino') {
    $pulsaciones = (210 - $edad) / 10;
} else {
   
    $pulsaciones = 0;
}

$resultado = round($pulsaciones);

echo "Si su edad es $edad años y su sexo es $sexo, debe tener aproximadamente $resultado pulsaciones cada 10 segundos de ejercicio aeróbico.";
?>