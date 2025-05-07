<?php

class TipoPropiedad
{
    private $id_tipo_propiedad;
    private $nombre;
    private $icon;

    public function __construct() {

    }

    public function getIdTipoPropiedad()
    {
        return $this->id_tipo_propiedad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIdTipoPropiedad($id_tipo_propiedad): void
    {
        $this->id_tipo_propiedad = $id_tipo_propiedad;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setIcon($icon): void
    {
        $this->icon = $icon;
    }
}