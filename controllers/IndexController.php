<?php

class IndexController
{
    private $view;
    private $config;

    public function __construct(){
        $this->view = new View();
        $this->config = Config::singleton();
    }

    public function index(){
        $tiposPropiedadController = new TipoPropiedadController();
        $propiedadController = new PropiedadController();
        $tiposPropiedad = $tiposPropiedadController->index();
        $propiedades = $propiedadController->index();

        $this->view->show('index', array('tiposPropiedad' =>  $tiposPropiedad, 'propiedades' => $propiedades));
    }
}
?>