<?php

#Condiciones
$a = 5;
$b = 10;

if($a > $b){
    echo "a es mayor que b";
}
else if($a == $b){

    echo "a es igual que b";

}
else{
    echo "a es menor que b";
}

echo "<br><br>";

#Suiches 

$dia = "lunes";

switch($dia){
    case 'sabado':
    echo "Voy a estudiar php";
    break;
    
    case 'viernes';
    echo "Voy a ver documentales";
    break;

    case 'martes';
    echo "Dia esperado";
    break;

    default: echo "Vamos a hacer un buen trabajo";

}

echo "<br><br>";

#Ciclo while
$n =1;
while ($n <= 5){
    echo "$n ";
    $n++;
}

echo "<br><br>";

#Ciclo DO while

$p =0;

do{
    echo "$p ";
    $p++; 
}
while($p <= 10);  

echo "<br><br>";

#Ciclo for
for($i = 0; $i <= 5; $i++){
    echo "$i ";
}


?>