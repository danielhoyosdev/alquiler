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

        public function registrar() {
            $this->view->render($this, 'registrar');
        }

        public function login() {
            $this->view->render($this, 'login');
        }

        public function logout() {
            $this->view->render($this, 'logout');
        }

        public function recuperar() {
            $this->view->render($this, 'recuperar');
        }
    }
?>