
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="examen.css">
</head>
<body>
    <?php
        $num1   = $_POST["numero"];
        $texto1 = $_POST["texto"];
        $color1 = $_POST["color"];
        $claseColor = $_POST["colorTexto"];

        $longitud = strlen($texto1);

        $textoMultiplicado = "";

        for($i = 0; $i <= $longitud; $i++){

            for($j = 1; $j <= $num1; $j++){
                $textoMultiplicado = $textoMultiplicado . $texto1[$i];
            } 

        } 
        echo "<p style=\"color:lilac\">$textoMultiplicado </p>";

        echo "<p class=\"$claseColor\" >$textoMultiplicado </p>";

    ?>
</body>
</html>