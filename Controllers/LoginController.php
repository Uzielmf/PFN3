<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";

class LoginController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index(){
        //Se usa una ruta absoluta
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }

    public function login($correo){
        $usuario = $this->model->where("correo", "=", $correo);

        if (count($usuario) === 1) {
            
            // switch ($usuario[0]["rol_id"]) {
            //     case '1':
                    
            //         break;
                
            //         case '2':
                    
            //             break;
                
            //             case '3':
                    
            //                 break;
                        
            //     default:
            //         echo "no tienes un rol asignado";
            //         break;
            // }
                session_start();
                $_SESSION["user"] = $usuario[0];

                header("Location: /dashboard");

        } else {
            echo "Credenciales incorrectas, por favor ingrese credenciales correctas"; 
            //aqui puedo armar una pagina que indique el error con un boton para volver a intentar
        }
        

    }

    
}


?>