<?php

#condiciones
$a=10;
$b=10;

if($a>$b){
    echo "a es mayor que b <br>";
}

else if($a==$b){ #Tambien
    echo "Son iguales <br>";
}

else{
    echo "b es mayor que a <br>";
}

#suiches

$dia="Sabado";

switch($dia){
    case 'Lunes':
        echo "Hoy no se hace nada <br>";
        break;
    case 'Viernes':
        echo "Hoy hay peda <br>";
        break;
        case 'Sabado';
        echo "Hoy se estudia php <br>";
        break;
    default:
        echo "Hoy no es un buen dia <br>";
}

#ciclos

#Ciclo while
$n=0;

while($n<5){
    $n++;
    echo $n;
}

echo "<br><br>";

#Ciclo do while

$p=1;

do{
    echo $p;
    $p++;
}
while($p<=5);

echo "<br><br>";

#Ciclo For

for($i=0;$i<=5;$i++){
    echo $i;
}


?>