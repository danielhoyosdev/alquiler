<?php

class ImagenPropiedadController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function getImagenesPropiedad($id) {
        $imagenPropiedaModel = new ImagenPropiedadModel();

        return $imagenPropiedaModel->getImagenesPropiedad($id);
    }
}
?>