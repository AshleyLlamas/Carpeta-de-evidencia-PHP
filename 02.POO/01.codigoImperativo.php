<?php

#Código imperativo o espagueti

$automovil1=(object)["marca"=>"Toyota","modelo"=>"Corolla"];
$automovil2=(object)["marca"=>"Hyundai","modelo"=>"Accent Vision"];

function mostrar($automovil){
    echo "<p> Hola soy un automovil $automovil->marca , modelo $automovil->modelo </p>";
}
mostrar($automovil1);
mostrar($automovil2);

?>