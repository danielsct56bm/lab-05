<!DOCTYPE html>
<html>
<head>
    <title>ejercicio1</title>
</head>
<body>
    <form method="post" action="">
        <p>Ingresar Valor 1:</p>
        <input type="text" name="valor1"><br>
        <p>Ingresar Valor 2:</p>
        <input type="text" name="valor2"><br>
        <p>Resultado :</p>
        <input type="submit" name="Suma" value="Suma">

    </form>

<?php
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        $suma=$numero1+$numero2;
        echo "El resultado de la suma es: ".$suma;
?>
</body>
</html>