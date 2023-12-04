<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Permiso.php";

class PermisoController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Permiso();
    }

    public function index()
    {
        $permisosData = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/adminPermisosRead.php";
    }






}

?>