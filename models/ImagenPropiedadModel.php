<?php
class ImagenPropiedadModel
{
    private ?Conexion $conexion;
    private string $table = "imagen_propiedad";
    private string $entity = "ImagenPropiedad";

    public function __construct()
    {
        $this->conexion = Conexion::singleton();
    }

    public function getImagenesPropiedad($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id_propiedad = {$id}";
        $query = $this->conexion->query($sql);

        return $query->fetchAll(PDO::FETCH_CLASS, $this->entity);
    }
}