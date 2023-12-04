<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Alumno.php";

class AlumnoController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Alumno();
    }

    public function index()
    {
        $alumnosData = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/adminAlumosRead.php";
    }

    public function delete($id)
    {
        $this->model->destroy($id);
        header("location: /admin/alumnos/read");
    }

    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/create/createAlumno.php";
    }

    public function store($data)
    {
       $res = $this->model->create($data);
       var_dump($res);

       header("location: /admin/alumnos/read");
    }


}

?>