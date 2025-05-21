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

        public function insertUsuario(Usuario $usuario)
        {
            if(isset($usuario)){
                try{
                    $sql = "INSERT INTO {$this->table} 
                            (id_usuario, nombre, apellido, telefono, correo, contrasena, fecha_registro, id_rol, estado) 
                            VALUES (null, :nombre, :apellido, :telefono, :correo, :contrasena, :fecha_registro, :id_rol, :estado)";

                    $query = $this->conexion->prepare($sql);
                    $query->bindValue(':nombre', $usuario->getNombre(),PDO::PARAM_STR);
                    $query->bindValue(':apellido', $usuario->getApellido(),PDO::PARAM_STR);
                    $query->bindValue(':telefono', $usuario->getTelefono(),PDO::PARAM_STR);
                    $query->bindValue(':correo', $usuario->getCorreo(),PDO::PARAM_STR);
                    $query->bindValue(':contrasena', $usuario->getContrasena(),PDO::PARAM_STR);
                    $query->bindValue(':fecha_registro', $usuario->getFechaRegistro(), PDO::PARAM_STR);
                    $query->bindValue(':id_rol', 3,PDO::PARAM_STR);
                    $query->bindValue(':estado', $usuario->getEstado(),PDO::PARAM_STR);
                    $query->execute();

                    return $query->rowCount();
                }catch(PDOExeption $e){
                    return false;
                }
            }
        }

        public function ingresar(Usuario $usuario)
        {
            if(isset($usuario)){
                try{
                    $sql = "SELECT * FROM {$this->table} WHERE correo = :correo AND contrasena = :contrasena LIMIT 1";

                    $query = $this->conexion->prepare($sql);
                    $query->bindValue(':correo', $usuario->getCorreo(),PDO::PARAM_STR);
                    $query->bindValue(':contrasena', $usuario->getContrasena(),PDO::PARAM_STR);
                    $query->execute();

                    return $query->fetch(PDO::FETCH_OBJ);
                }catch(PDOExeption $e){
                    return false;
                }
            }
        }
  }
?>