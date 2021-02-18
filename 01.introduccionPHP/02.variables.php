<?php

#Variable tipo int
$numero=5;
echo "Esto es un numero: $numero", "<br>";

#variabe tipo booleano
$booleana=false;
echo "Esto es una variable booleana: $booleana", "<br><br>";

#variable tipo Array
$colores=array("Amarillo", "Azul", "Rojo");

echo "Estos son los colores: $colores[1]";
echo "<br><br>";


#Variables Array con propiedades
$verduras=array("verdura1"=>"lechuga", "verdura2"=>"cebolla");

echo "Esto es una variable array arreglo: $verduras[verdura1]", " $verduras[verdura2]";

echo "<br><br>";
    
#Variables objeto
$frutas=(object)["fruta1"=>"Manzana","fruta2"=>"pera"];
echo "Esto es una variable objeto: $frutas->fruta1";
echo "<br><br>";

#Variable Array de tipo int
$Peliculas=array(1,2,3,4);
echo "$Peliculas[1]", " $Peliculas[2]";



?>