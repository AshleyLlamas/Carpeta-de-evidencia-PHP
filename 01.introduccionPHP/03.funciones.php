<?php

#Funciones sin parametros

function saludo(){
echo "Hola <br>";
}
saludo();

#Funciones con parameros
function despedida($adios){
    echo $adios."<br>";
}
despedida("BYE BYEEE");

#Funciones con retorno
function retorno($retornar){
    return $retornar;
}
echo retorno("retorno <br>");

?>