<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre1 = $_POST["nombre1"];
        $nombre2 = $_POST["nombre2"];
        $texto   = $_POST["texto"];


        $textoCambiarNombres = "<p>Ratón: ¡Espera!, ¡Espera!<br>
        Gato: ¿Qué quieres?<br>
        Ratón: ¿Por qué haces esto?<br>
        Gato: ¿Qué cosa?<br>
        Ratón: Cazarme.<br>
      </p>";

        $textoCambiarNombres = str_replace("Gato", $nombre1, $textoCambiarNombres);
        $textoCambiarNombres = str_replace("Ratón", $nombre2, $textoCambiarNombres);

        echo $textoCambiarNombres;


        function ponerNombres($nom1,$nom2, $texto1){
            echo "<h1> $nom1 $nom2 $texto1 $nom1 $nom2</h1>";
        }

        ponerNombres($nombre1,$nombre2,$texto);
        ponerNombres($nombre2,$nombre1,$texto);


    ?>
</body>
</html>