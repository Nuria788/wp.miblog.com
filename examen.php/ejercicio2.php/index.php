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
<form action="pagina2.php" method="get">
        <label for="a"> Ingrese "a": </label>
        <input type="number" name="a" id="a">
        <br><br>
        <label for="b">Ingrese "b": </label>
        <input type="number" name="b" id="b">
        <br><br>
        <label for="c">Ingrese "c": </label>
        <input type="number" name="c" id="c">
        <br><br>
        <button>Calcular</button>
    </form>
</body>
</html>