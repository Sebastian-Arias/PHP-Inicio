<?php

#Empaquetamos los objetos en una clase

class Automovil{
    #PROPIEDADES: caracteristicas que puede tener un objeto
    public $marca;
    public $modelo;
    #METODO: algoritmo asociado a un objeto que indica la capacidad de lo que puede hacer
    public function mostrar(){        
        echo "<p>Hola soy un carro marca $this->marca modelo $this->modelo</p>";
    }
}

#OBJETO entidad provista de metodos o mensajes a los cuales responde una entidad
$a = new Automovil();
$a -> marca = "<b>Toyota</b>";
$a -> modelo = "<b>Corola</b>";
$a -> mostrar();
echo "<br>";
$b = new Automovil();
$b -> marca = "<b>Kia</b>";
$b -> modelo = "<b>Tonic</b>";
$b -> mostrar();
?>
