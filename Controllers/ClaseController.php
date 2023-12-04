<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Clase.php";

class ClaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Clase();
    }

    public function index()
    {
        $clasesData = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/adminClasesRead.php";
    }

    public function delete($id)
    {
        $this->model->destroy($id);
        header("location: /admin/clases/read");
    }

    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/Admin/create/createClase.php";
    }

    public function store($data)
    {
       $res = $this->model->create($data);
       var_dump($res);

       header("location: /admin/clases/read");
    }


}



?>