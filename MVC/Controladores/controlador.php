<?php

class MvcController{

    #Llamada a la plantilla
    #----------------------

    public function plantilla(){
        include "Vistas/template.php";
    }

    #INTERACCION DEL USUARIO
    #----------------------

    public function enlacesPaginasController(){

        $enlaces = isset($_GET["action"]) ? $_GET["action"] : "No exite";
        echo $enlaces;
    }
}

?>