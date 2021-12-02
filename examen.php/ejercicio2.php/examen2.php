<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h3{
            color:purple;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php

        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];
        $num3 = $_GET["numero3"];


        $cuadrado = $num1*$num1;

        echo "<h1> el area de un cuadrado de lado $num1 es igual a $cuadrado </h1>";


        if ($num2 > $num3){
            echo "<h3 > el numero2 $num2 es mayor que el numero3 $num3 </h3>";
        }else if ($num2 == $num3){
            echo "<h3 > el numero2 $num2 es al numero3 $num3 </h3>";
        }else{
            echo "<h3 > el numero2 $num2 es menor que el numero3 $num3 </h3>";
        }



    ?>
</body>
</html>