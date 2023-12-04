<?php

//traer controllers
require_once "./Controllers/LoginController.php";
require_once "./Controllers/ClaseController.php";
require_once "./Controllers/AlumnoController.php";
require_once "./Controllers/MaestroController.php";
require_once ".//Controllers/PermisoController.php";

//controladores
$loginController = new LoginController();
$claseController = new ClaseController();
$alumnoController= new Alumnocontroller();
$maestroController= new MaestroController();
$permisoController= new PermisoController();

//ENRUTADOR
$route = $_SERVER["REQUEST_URI"];



switch ($route) {
    case '/index.php':
//view del Login
        $loginController->index();
        break;

        case '/login':
        $loginController->login($_POST["correo"], $_POST["contrasena"]);
        
            break;

    case '/dashboard':
        include "./views/dashboard.php";
        break;
        

        //Alumnos desde admin

    case '/admin/alumnos/read':
        $alumnoController->index();
        break;

    case '/alumnos/edit':
        echo 'aqui estas editando un alumno';
        break;

    case '/alumnos/form/create':
        $alumnoController->create();
        break;

     case '/alumnos/create':
        $alumnoController->store($_POST);
        break;   

        case '/alumnos/delete':
            $alumnoController->delete($_POST["id"]);
            break;

        //maestros desde admin
        case '/admin/maestros/read':
            $maestroController->index();
            break;
    
        case '/maestros/edit':
            echo 'aqui estas editando un maestro';
            break;
    
            case '/maestros/form/create':
                $maestroController->create();
                break;
        
             case '/maestros/create':
                $maestroController->store($_POST);
                break; 

            case '/maestros/delete':
                $maestroController->delete($_POST["id"]);
                break;

            //clases desde admin
            case '/admin/clases/read':
                $claseController->index();
                break;
        
            case '/clases/edit':
                echo 'aqui estas editando un clase';
                break;
        
                case '/clases/form/create':
                    $claseController->create();
                    break;
            
                 case '/clases/create':
                    $claseController->store($_POST);
                    break; 

                case '/clases/delete':
                    $claseController->delete($_POST["id"]);
                    break;

            // permisos desde admin
            case '/admin/permisos/read':
                $permisoController->index();
                break;
        
            case '/permisos/edit':
                echo 'aqui estas editando un permiso';
                break;

    case '/sexta.php':

        break;

    default:
        include "./views/error404.php";
        break;
}



