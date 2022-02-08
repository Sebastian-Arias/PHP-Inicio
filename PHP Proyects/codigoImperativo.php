<?php

#Codigo Imperativo o espagueti

$automovil1 = (object)["marca"=>"Toyota",  "modelo"=>"Corrola"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent vision"];

function mostrar($automovil){

    echo "<p> Hola soy un $automovil->marca, modelo $automovil->modelo</p>";

}

mostrar($automovil2);
echo "<br><br>";
mostrar($automovil1);


?>