<?php

    class UsuariosController {
        private $view;

        public function __construct() {
            $this->view = new View();
        }

        public function index() {
            $usuariosModel = new UsuariosModel();
            $usuarios = $usuariosModel->getUsuarios();

            $this->view->show('usuarios', array('usuarios' =>  $usuarios));
        }

        public function registrarse() {
            $tiposPropiedadController = new TipoPropiedadController();
            $tiposPropiedad = $tiposPropiedadController->index();

            $this->view->show('registrarse', array('tiposPropiedad' => $tiposPropiedad));
        }

        public function ingresar() {
            $tiposPropiedadController = new TipoPropiedadController();
            $tiposPropiedad = $tiposPropiedadController->index();

            $this->view->show('ingresar', array('tiposPropiedad' => $tiposPropiedad));
        }

        public function logout() {
            $this->view->render($this, 'logout');
        }

        public function recuperar() {
            $this->view->render($this, 'recuperar');
        }
    }
?>