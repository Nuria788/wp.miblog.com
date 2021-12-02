<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--Tienes que crear una  pagina que tenga un 
    formulario GET donde se soliciten 3 números.
Luego tienes que crear otra pagina donde se recojan los 3 números en 3 variables  
mediante código php y se haga lo siguiente con las variables:
Con la primera variable, es decir, con el primer numero se 
calculará el cuadrado del numero y por pantalla sacaremos el 
resultado diciendo "el area de un cuadrado de lado *primer numero* 
es igual a *resultado*". Todo ello dentro de una etiqueta h1.
Con la segunda y tercera variable tenéis que compararlas y 
con un h3 tenéis que decir en una etiqueta h3 en color lila cual 
de las dos variables es mayor y cual es menor.
-->
<form action="examen2.php" method="get">
        <p>Pon un numero <input type="number" name="numero1" ></p>
        <p>Pon un numero <input type="number" name="numero2" ></p>
        <p>Pon un numero <input type="number" name="numero3" ></p>
        <input type="submit" value="enviar">

    </form>

</body>
</html>