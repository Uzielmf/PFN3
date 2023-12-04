<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Maestro.php";

class MaestroController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Maestro();
    }

    public function index()
    {
        $maestrosData = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/adminMaestrosRead.php";
    }

    public function delete($id)
    {
        $this->model->destroy($id);
        header("location: /admin/maestros/read");
    }

    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/create/createMaestro.php";
    }

    public function store($data)
    {
       $res = $this->model->create($data);
       var_dump($res);

       header("location: /admin/maestros/read");
    }



}



?>