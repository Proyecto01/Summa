<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $tipo;



    /**
     * @param string             $nombre
     * @param string             $apellido     
     * @param integer            $edad
     * @param string             $tipo;
     */
    public function __construct(
        string $nombre,
        string $apellido,
        integer $edad,
        string $tipo
    )
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->tipo = $tipo;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string   nombre
     * @return Empleado
     */
    public function setNombre($nombre): string
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string   apellido
     * @return Empleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    /**
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int   edad
     * @return Empleado
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @param string   tipo
     * @return Empleado
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }    

}
