<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Tienes que crear un código php que:
Escriba 30 párrafos donde diga 
"Este es el párrafo nº X", y la X sea el número del párrafo.
Los párrafos impares debe mostrarlos en color rojo y los pares en color verde.
Deberá crear 25 imágenes con la imagen adjunta "Ejercicio1.jpg"
Para escribir el código se tendrá que utilizar los 2 archivos 
adjuntos llamados "Ejercicio1.php" y "Ejercicio1.css"-->


    <div class="top">top</div>
    <div class="mid">
        
    <?php

    for ($i = 1; $i <= 30;$i++){

        if ($i % 2 == 0){

            echo "<p class=\"par\"> Este parrafo es el numero $i </p>";
        }else{
            echo "<p class=\"impar\"> Este parrafo es el numero $i </p>";
        }

        

    }
    

    for ($i = 1; $i <= 25;$i++){
        echo "<img src=\"Ejercicio1.jpg\">";
    }

    ?>


    </div>
    <div class="bot">bot</div>



</body>
</html>