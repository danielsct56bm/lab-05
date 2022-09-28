<?php
    $pre=$_POST['pre'];
    $uni=$_POST['uni'];
    $nuevoPrecio=$pre*0.95;
    $obsequio=$uni*2;
    $importeCompra=$nuevoPrecio+$uni;
    $descuentoImporte=$importeCompra*0.93;
    $importeFinal=$importeCompra-$descuentoImporte;
    echo "el nuevo precio de la gaseosa de 3L es: ".$nuevoPrecio."<br>";
    echo "el importe de la compra es: ".$importeCompra."<br>";
    echo "el descuento especial es: ".$descuentoImporte."<br>";
    echo "el importe a pagar es: ".$importeFinal."<br>";
    echo "el numero de caramelos de obsequio es: ".$obsequio."<br>";
?>