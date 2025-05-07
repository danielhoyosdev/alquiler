<?php

class TipoPropiedadController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function index() {
        $tipoPropiedadModel = new TipoPropiedadModel();

        return $tipoPropiedadModel->getTipoPropiedad();
    }
}
?>