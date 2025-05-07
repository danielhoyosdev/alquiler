<?php
    class UsuariosModel
    {
        private ?Conexion $conexion;
        private string $table = "usuarios";
        private string $entity = "Usuario";

        public function __construct()
        {
            $this->conexion = Conexion::singleton();
        }

        public function getUsuarios()
        {
            $sql = "SELECT * FROM $this->table";
            $query = $this->conexion->query($sql);

            return $query->fetchAll(PDO::FETCH_CLASS, $this->entity);
        }
  }
?>