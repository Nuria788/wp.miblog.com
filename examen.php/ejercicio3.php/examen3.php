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
        Gato: Pues, porque tengo hambre.<br>
        Ratón: Bueno, ¿Te gusta mi sabor y la textura de mi piel?<br>
        Gato: Humm, de hecho no, odio cuando la cola pasa por mi
        garganta y todavía después de unas semanas sigo escupiendo
        bolas de pelo blancas.<br>
        Ratón: Entonces ¿Por qué cazas ratones? No tiene sentido.<br>
        Gato: Tal vez, pero en la iglesia de Doraemon el gato que
        vino del futuro, nos enseñaron que para estar cerca de él
        debemos comer ratones pues ustedes no lo aceptan a él como el
        único viajero del tiempo y salvador de la comunidad gatuna.
        Ratón: No puedo creer que esa sea la razón.<br>
        Gato: Hagamos un trato, te dejare libre si aceptas a
        Doraemon como único viajero del tiempo y salvador de la
        comunidad gatuna.<br>
        Ratón: Claro que no lo aceptaré, para empezar por que no
        existe y segundo, si lo hiciera, entonces no me convendría
        creer en él ya que solo quiere salvar a los felinos.<br>
        Gato: No te atrevas a decir que no existe, rata blasfema,
        porque está en todos lados y puede desatar su furia, además en
        mi iglesia tenemos una comunidad de ratones creyentes a los
        cuales dejamos en paz.<br>
        Ratón: Doraemon sólo era la caricatura de un gato azul,
        ¿Cuántos gatos azules conoces?<br>
        Gato: Yo creo que para demostrar su divinidad Doraemon
        eligió el color azul para que ninguna raza sea discriminada y
        la televisión fue la manera de extender su mensaje en
        nosotros.<br>
        Ratón: Bueno, explícame esto, Doraemon era un robot, ¿Por
        qué tendría que comer ratones si ni estomago tiene? Yo creo
        que tu iglesia ha inventado todo sólo para poder controlarlos.<br>
        Gato: Pues, pues… (El Gato se come al ratón) Tanta plática
        me abrió el apetito.</p>";

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