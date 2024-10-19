<?php

$tCompra = 1200;
$aleatorio = rand(1, 100);
echo "El número aleatorio fue: " . $aleatorio . '<br>';

if ($aleatorio < 50) {
    $descuento = $tCompra * 15 / 100;
} elseif ($aleatorio >= 50 && $aleatorio <= 80) { 
    $descuento = $tCompra * 20 / 100;
} else {
    $descuento = $tCompra * 30 / 100; 
}

echo "El precio es: " . $tCompra . ", el descuento es: " . $descuento . ", usted pagará: " . ($tCompra - $descuento);

?>