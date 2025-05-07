<?php
class TipoPropiedadModel
{
    private ?Conexion $conexion;
    private string $table = "tipo_propiedad";
    private string $entity = "TipoPropiedad";

    public function __construct()
    {
        $this->conexion = Conexion::singleton();
    }

    public function getTipoPropiedad()
    {
        $sql = "SELECT * FROM $this->table";
        $query = $this->conexion->query($sql);

        return $query->fetchAll(PDO::FETCH_CLASS, $this->entity);
    }
}
