<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Empresa extends Model
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
     * @var integer
     */
    private $empleados;

    /**
     * @param string             $nombre
     * @param int                $empleados
     */
    public function __construct(
        string $nombre,
        int $empleados
    )
    {
        $this->nombre = $nombre;
        $this->empleados = $empleados;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string    nombre
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return integer
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }

    /**
     * @param integer    empleados
     * @return Empresa
     */
    public function setEmpleados($empleados)
    {
        $this->empleados = $empleados;
        return $this;
    }
}
