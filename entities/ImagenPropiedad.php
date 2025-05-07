<?php

class ImagenPropiedad
{
    private $id_imagen;
    private $path;
    private $descripcion;
    private $destacada;
    private $fecha_creacion;
    private $id_propiedad;

    public function __construct()
    {

    }

    public function getIdImagen()
    {
        return $this->id_imagen;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getDestacada()
    {
        return $this->destacada;
    }
    public function getIdPropiedad()
    {
        return $this->id_propiedad;
    }
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    public function setIdPropiedad($id_propiedad): void
    {
        $this->id_propiedad = $id_propiedad;
    }
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }
    public function setDestacada($destacada): void
    {
        $this->destacada = $destacada;
    }
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    public function setPath($path): void
    {
        $this->path = $path;
    }
    public function setIdImagen($id_imagen): void
    {
        $this->id_imagen = $id_imagen;
    }
}