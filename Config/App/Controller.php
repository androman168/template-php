<?php


class Controller 
{
    /**
     * @var Views
     */
    protected $views;
    /**
     * @var mixed
     */
    protected $model;

    public function __construct()
    {   
        $this->views = new Views();
        $this->loadModel();
    }

    public function loadModel()
    {
        $model = get_class($this)."Model";
        $ruta = "Models/".$model.".php";

        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }
    }
}