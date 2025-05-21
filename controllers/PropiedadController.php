<?php

class PropiedadController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function index() {
        $propiedadModel = new PropiedadModel();

        return $propiedadModel->getPropiedades();
    }

    public function ver() {
        $id = empty($_GET["id"]) ? "1" : "{$_GET["id"]}";

        $propiedadModel = new PropiedadModel();
        $imagenPropiedadController = new ImagenPropiedadController();
        $tiposPropiedadController = new TipoPropiedadController();

        $tiposPropiedad = $tiposPropiedadController->index();
        $propiedad = $propiedadModel->getPropiedad($id);
        $imagenes = $imagenPropiedadController->getImagenesPropiedad($id);

        $this->view->show('propiedad', array('tiposPropiedad' => $tiposPropiedad, 'propiedad' =>  $propiedad, 'imagenes' => $imagenes));
    }

    public function categoria()
    {
        $categoria = empty($_GET["id"]) ? "1" : "{$_GET["id"]}";

        $tiposPropiedadController = new TipoPropiedadController();
        $propiedadModel = new PropiedadModel();
        $tiposPropiedad = $tiposPropiedadController->index();
        $propiedades = $propiedadModel->getPropiedadesCategoria($categoria);

        $this->view->show('index', array('tiposPropiedad' => $tiposPropiedad, 'propiedades' =>  $propiedades));
    }
}
?>