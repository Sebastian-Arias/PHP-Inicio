<?php

print "<h1>Bienvenidos a practica PHP :)</h1> <br>";
echo "Hola"," Que Tal?";
echo "<br><br>";

#var_dump sirve para saber el tipo de dato

#Variable Numerica
$VariableCinco = 5;
$NombreVar = "Es una variable de texto";
echo $NombreVar."<br>";
echo "El numero es: <b>$VariableCinco</b><br>";
var_dump($VariableCinco);
echo "<br><br>";

#Variable texto
$VariablePalabra = "Animales Artropodos";
echo "Su variable de texto es: <b>$VariablePalabra</b><br>";
var_dump($VariablePalabra);
echo "<br><br>";

#Variables Boleana
$Boleana = true;
echo "La siguiente es una variable <b>$Boleana</b><br>";
var_dump($Boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("Amarillo","Azul","Gris","Rosado");
echo "Los colores en un array son: <b>$colores[2]</b><br>";
var_dump($colores);
echo "<br><br>";


#Variable Arreglo con propiedades
$verduras = array("veg1"=>"Tomate", "veg2"=>"Perejil", "veg3"=>"Papaya");
echo "La variable array es la verdura: <b>$verduras[veg2]</b><br>";
var_dump($verduras);
echo "<br><br>";

#Variables de tipo objeto 
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana", "fruta3"=>"zandia"];
echo "La variable de tipo objeto en frutas es: <b>$frutas->fruta2</b><br>";
var_dump($frutas);
?>