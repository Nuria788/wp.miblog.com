<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--Tienes que crear una una pagina que tenga un formulario POST 
   donde se pidan dos nombres  y un texto cualquiera.
Luego tienes que crear otra pagina donde se recojan los 2 nombres 
y textos en 3 variables mediante código php y se haga lo siguiente con las variables:
Sustituir en el siguiente texto *raton* y *gato* por las variables 
nombre recogidas del formulario.

Declarar una función que añade los dos nombres al principio y al final del texto y sácalo por pantalla con una etiqueta que creas conveniente.
Utilizar la función 2 veces con las variables de entrada en diferente orden.
--> 
<form action="pagina2.php" method="post">
  <label>Escribe un nombre</label>
  <input type="text" name="texto" size="30" maxlength="100">
<br>
 <label>Escribe otro nombre</label> 
 <input type="text" name="teto1" size="25" maxlength="100" value="">
<br>
<p>Escribe lo que quieras</p>
<textarea cols="30" rows="7" name="comentarios">
Ratón: ¡Espera!, ¡Espera!
Gato: ¿Qué quieres?
Ratón: ¿Por qué haces esto?
Gato: ¿Qué cosa?
Ratón: Cazarme.
Gato: Pues, porque tengo hambre.
Ratón: Bueno, ¿Te gusta mi sabor y la textura de mi piel?
Gato: Humm, de hecho no, odio cuando la cola pasa por mi
garganta y todavía después de unas semanas sigo escupiendo
bolas de pelo blancas.
Ratón: Entonces ¿Por qué cazas ratones? No tiene sentido.
Gato: Tal vez, pero en la iglesia de Doraemon el gato que
vino del futuro, nos enseñaron que para estar cerca de él
debemos comer ratones pues ustedes no lo aceptan a él como el
único viajero del tiempo y salvador de la comunidad gatuna.
Ratón: No puedo creer que esa sea la razón.
Gato: Hagamos un trato, te dejare libre si aceptas a
Doraemon como único viajero del tiempo y salvador de la
comunidad gatuna.
Ratón: Claro que no lo aceptaré, para empezar por que no
existe y segundo, si lo hiciera, entonces no me convendría
creer en él ya que solo quiere salvar a los felinos.
Gato: No te atrevas a decir que no existe, rata blasfema,
porque está en todos lados y puede desatar su furia, además en
mi iglesia tenemos una comunidad de ratones creyentes a los
cuales dejamos en paz.
Ratón: Doraemon sólo era la caricatura de un gato azul,
¿Cuántos gatos azules conoces?
Gato: Yo creo que para demostrar su divinidad Doraemon
eligió el color azul para que ninguna raza sea discriminada y
la televisión fue la manera de extender su mensaje en
nosotros.
Ratón: Bueno, explícame esto, Doraemon era un robot, ¿Por
qué tendría que comer ratones si ni estomago tiene? Yo creo
que tu iglesia ha inventado todo sólo para poder controlarlos.
Gato: Pues, pues… (El Gato se come al ratón) Tanta plática
me abrió el apetito.
</textarea>
<br><br>
<input type="submit" value="GRABAR">


</form>
</body>
</html>