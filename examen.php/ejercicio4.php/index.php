<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!--Tienes que crear una pagina que tenga un formulario donde se pida
  un texto, un numero y un color. Luego en la pagina donde se recojan las 
  variables del formulario mediante codigo php, teneis que crear una 
  función  que multiplique todas las letras del texto por el numero y las cambie de color.
Utilizar la función 2 veces.


Ejemplo: 
introduzco un 3 y el texto: "Hola como estas"
Como resultado me tendría que dar: "HHHooolllaaa   cccooommmooo   eeessstttaaasss"-->   
<form action="pagina2.php" method="post">
  <label>Texto</label>
  <input type="text" name="texto" size="30" maxlength="100">
<br>
 <label>Número</label> 
 <input type="text" name="numero" size="25" maxlength="100" value="">
<br>
<label>Color</label> 
<input type="text" name="color" size="20" maxlength="60">
<p>Escribe lo que quieras</p>
<textarea cols="30" rows="7" name="comentarios"></textarea>
</form>

</body>
</html>