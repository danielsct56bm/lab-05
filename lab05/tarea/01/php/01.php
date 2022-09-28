<?php
    $hi=$_POST['hi'];
    $imp=$_POST['imp'];
    $comision=$imp*0.075;
    $bono=$hi*50;
    $bruto=600+$comision+$bono;
    $descuento=$bruto*0.11;
    $neto=$bruto-$descuento;
    echo "la comision por el importe total del mes es: ".$comision."<br>";
    echo "el bono por el numero de hijos es: ".$bono."<br>";
    echo "el sueldo bruto es: ".$bruto."<br>";
    echo "el descuento a su sueldo por ley es: ".$descuento."<br>";
    echo "el sueldo neto es: ".$neto."<br>";
?>