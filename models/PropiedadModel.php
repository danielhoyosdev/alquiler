<?php
class PropiedadModel
{
    private ?Conexion $conexion;
    private string $table = "propiedad";
    private string $entity = "Propiedad";

    public function __construct()
    {
        $this->conexion = Conexion::singleton();
    }

    public function getPropiedades()
    {
        $sql = "SELECT p.id_propiedad, p.nombre, p.departamento, p.ciudad, p.precio, ip.path as imagen 
                FROM propiedad as p JOIN imagen_propiedad as ip WHERE p.id_propiedad = ip.id_propiedad AND ip.destacada = 1";
        $query = $this->conexion->query($sql);

        return $query->fetchAll(PDO::FETCH_CLASS, $this->entity);
    }

    public function getPropiedadesCategoria($categoria)
    {
        $sql = "SELECT p.id_propiedad, p.nombre, p.departamento, p.ciudad, p.precio, ip.path as imagen 
                FROM propiedad as p JOIN imagen_propiedad as ip WHERE p.id_propiedad = ip.id_propiedad AND ip.destacada = 1 
                AND p.id_tipo_propiedad = {$categoria}";
        $query = $this->conexion->query($sql);

        return $query->fetchAll(PDO::FETCH_CLASS, $this->entity);
    }

    public function getPropiedad($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id_propiedad = {$id}";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
