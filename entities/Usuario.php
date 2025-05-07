<?php
    class Usuario {
        public $id_usuario;
        public $nombre;
        public $apellido;
        public $telefono;
        public $correo;
        public $contrasena;
        public $fecha_registro;
        public $estado;

        public function __construct(){
        
        }

        public function __construct1($id_usuario, $nombre, $apellido, $telefono, $correo, $contrasena, $fecha_registro, $estado) {
            $this->id_usuario = $id_usuario;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->telefono = $telefono;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
            $this->fecha_registro = $fecha_registro;
            $this->estado = $estado;
        }

        public function getIdUsuario() {
            return $this->id_usuario;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }
        
        public function getTelefono() {
            return $this->telefono;
        }

        public function getCorreo() {
            return $this->correo;
        }   

        public function getContrasena() {
            return $this->contrasena;
        }

        public function getFechaRegistro() {
            return $this->fecha_registro;
        }

        public function getEstado() {
            return $this->estado;
        }   

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        public function setCorreo($correo) {
            $this->correo = $correo;
        }

        public function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        }

        public function setFechaRegistro($fecha_registro) {
            $this->fecha_registro = $fecha_registro;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }
    }

?>