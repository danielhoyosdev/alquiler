<?php
    session_start();

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

        public function registrarsePost()
        {
            $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
            $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
            $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
            $correo = isset($_POST['email']) ? trim($_POST['email']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';

            // Usuario
            $usuario = new Usuario();
            $usuario->setNombre($nombre);
            $usuario->setApellido($apellido);
            $usuario->setTelefono($telefono);
            $usuario->setCorreo($correo);
            $usuario->setContrasena(md5($password));
            $usuario->setFechaRegistro(date('Y-m-d H:i:s'));
            $usuario->setEstado(1);

            $usuarioModel = new UsuariosModel();
            $request = $usuarioModel->insertUsuario($usuario);

            // Configuraciones
            $config = Config::singleton();

            if ($request) {
                header("location: {$config->get('http')}usuarios/ingresar");
            } else {
                header("location: {$config->get('http')}usuarios/registrarse");
            }
        }

        public function ingresar() {
            $tiposPropiedadController = new TipoPropiedadController();
            $tiposPropiedad = $tiposPropiedadController->index();

            $this->view->show('ingresar', array('tiposPropiedad' => $tiposPropiedad));
        }

        public function ingresarPost()
        {
            $correo = isset($_POST['email']) ? trim($_POST['email']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';

            // Usuario
            $usuario = new Usuario();
            $usuario->setCorreo($correo);
            $usuario->setContrasena(md5($password));

            $usuarioModel = new UsuariosModel();
            $request = $usuarioModel->ingresar($usuario);

            // Configuraciones
            $config = Config::singleton();

            if ($request) {
                $_SESSION["usuario"] = $request;

                $this->dashboard();
            } else {
                $this->registrarse();
            }
        }

        public function dashboard() {
            // Configuraciones
            $config = Config::singleton();

            if($_SESSION["usuario"]) {
                $tiposPropiedadController = new TipoPropiedadController();
                $tiposPropiedad = $tiposPropiedadController->index();

                $usuario = new Usuario();
                $usuario->setNombre($_SESSION["usuario"]->nombre);
                $usuario->setApellido($_SESSION["usuario"]->apellido);
                $usuario->setTelefono($_SESSION["usuario"]->telefono);
                $usuario->setCorreo($_SESSION["usuario"]->correo);
                $usuario->setFechaRegistro($_SESSION["usuario"]->fecha_registro);
                $usuario->setEstado($_SESSION["usuario"]->estado);

                $this->view->show('dashboard', array('tiposPropiedad' => $tiposPropiedad, 'usuario' => $usuario));
            } else {
                header("location: {$config->get('http')}usuarios/registrarse");
            }
        }

        public function logout() {
            session_destroy();

            // Configuraciones
            $config = Config::singleton();

            header("location: {$config->get('http')}usuarios/ingresar");
        }

        public function recuperar() {
            $this->view->render($this, 'recuperar');
        }
    }
?>