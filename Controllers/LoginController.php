<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";

class LoginController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function all(){
        $this->model->all();
    }

    public function index(){
        //Se usa una ruta absoluta
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }

    public function login($correo, $contra){
        $usuario = $this->model->where("correo", "=", $correo);
        $contrasena = $this->model->where("contrasena", "=", $contra);
        if (count($usuario) && count($contrasena)  === 1) {
            
                session_start();
                $_SESSION["user"] = $usuario[0];

                header("Location: /dashboard");

        } else {
            header("location: /views/credIncorrectas.php");
            //aqui puedo armar una pagina que indique el error con un boton para volver a intentar
        }
        

    }

    
}


?>