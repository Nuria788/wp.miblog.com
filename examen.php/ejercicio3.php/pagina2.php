<?php
 $nombre=$_POST["texto"];
 $texto1=$_POST["texto1"];
 $comentarios=$_POST["comentarios"];
 

 $replace = array();echo "<br>";
 echo implode("<br>",substr_replace($replace));
 echo "<br>";

 $replace = array("1: Gato","2: Raton");echo "<br>";
echo implode("<br>",substr_replace($replace,'$nombre'));
echo implode("<br>",substr_replace($replace,'$nombre'));
echo "<br>";
?>