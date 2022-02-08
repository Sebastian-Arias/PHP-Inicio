<?php

#Funciones sin parametros
function nombreFuncion(){

    echo "hola esta es una funcion SIN parametros<br>";

}
nombreFuncion();

#Funciones con parametros
function FuncionParametros($num1, $num2){

    echo $num1 + $num2."<br>";
}
FuncionParametros(15,5);

#Funciones con Retorno
function funcionRetorno($retornar){

    return $retornar;

}

echo funcionRetorno("Funcion que retorna"."<br>");

echo FuncionParametros(3,3);
?>