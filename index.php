<?php

//traer controllers
require_once "./Controllers/LoginController.php";
require_once "./Controllers/ClaseController.php";


//controladores
$loginController = new LoginController();
$claseController = new ClaseController();

//ENRUTADOR
$route = $_SERVER["REQUEST_URI"];



switch ($route) {
    case '/index.php':
//view del Login
        $loginController->index();
        break;

        case '/login':
        $loginController->login($_POST["correo"]);
        
            break;

    case '/dashboard':
        include "./views/dashboard.php";
        break;

        case "/dashboard";
        

        //Alumnos desde admin

    case '/admin/alumnos/read':
        include "./views/adminAlumosRead.php";
        break;

    case '/admin/alumnos/edit':
        echo 'aqui estas editando un alumno';
        break;

    case '/admin/alumnos/create':
        echo 'aqui estas creando un alumno';
        break;

        //maestros desde admin
        case '/admin/maestros/read':
            include "./views/adminMaestrosRead.php";
            break;
    
        case '/admin/maestros/edit':
            echo 'aqui estas editando un maestro';
            break;
    
        case '/admin/maestros/create':
            echo 'aqui estas creando un maestro';
            break;

            //clases desde admin
            case '/admin/clases/read':
                $claseController->index();
                break;
        
            case '/admin/clases/edit':
                echo 'aqui estas editando un clase';
                break;
        
            case '/admin/clases/create':
                echo 'aqui estas creando un clase';
                break;

            // permisos desde admin
            case '/admin/permisos/read':
                echo 'aqui estara viendo los permisos';
                break;
        
            case '/admin/clpermisosases/edit':
                echo 'aqui estas editando un permiso';
                break;

    case '/sexta.php':

        break;

    default:
        include "./views/error404.php";
        break;
}



