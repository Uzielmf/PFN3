<?php

class ClaseController
{
    public function index(){
        //Se usa una ruta absoluta
        include $_SERVER["DOCUMENT_ROOT"] . "/views/adminClasesRead.php";
    }
}


?>