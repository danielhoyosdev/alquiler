<?php

class Propiedad
{
    private $id_propiedad;
    private $nombre;
    private $descripcion;
    private $precio;
    private $departamento;
    private $ciudad;
    private $direccion;
    private $num_habitaciones;
    private $num_banos;
    private $max_huespedes;
    private $wifi;
    private $parqueadero;
    private $fecha_creacion;
    private $imagen;

    public function __construct()
    {

    }

    public function getIdPropiedad()
    {
        return $this->id_propiedad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getNumHabitaciones()
    {
        return $this->num_habitaciones;
    }

    public function getNumBanos()
    {
        return $this->num_banos;
    }

    public function getMaxHuespedes()
    {
        return $this->max_huespedes;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function getParqueadero()
    {
        return $this->parqueadero;
    }

    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setIdPropiedad($id_propiedad): void
    {
        $this->id_propiedad = $id_propiedad;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    public function setDepartamento($departamento): void
    {
        $this->departamento = $departamento;
    }

    public function setCiudad($ciudad): void
    {
        $this->ciudad = $ciudad;
    }

    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    public function setNumHabitaciones($num_habitaciones): void
    {
        $this->num_habitaciones = $num_habitaciones;
    }

    public function setNumBanos($num_banos): void
    {
        $this->num_banos = $num_banos;
    }

    public function setMaxHuespedes($max_huespedes): void
    {
        $this->max_huespedes = $max_huespedes;
    }

    public function setWifi($wifi): void
    {
        $this->wifi = $wifi;
    }

    public function setParqueadero($parqueadero): void
    {
        $this->parqueadero = $parqueadero;
    }

    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }
}