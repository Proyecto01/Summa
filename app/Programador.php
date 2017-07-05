<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class Programador extends Empleado
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var boolean
     */
    private $is_php;

    /**
     * @var boolean
     */
    private $is_net;

    /**
     * @var boolean
     */
    private $is_python;

    /**
     * @var integer
     */
    private $empleado_id;




    /**
     * @param boolean             $is_php
     * @param boolean             $is_net     
     * @param boolean             $is_python     
     * @param integer            $empleado_id
     */
    public function __construct(
        string $is_php,
        string $is_net,
        string $is_python,        
        integer $empleado_id
    )
    {
        $this->is_php = $is_php;
        $this->is_net = $is_net;
        $this->is_python = $is_python;        
        $this->empleado_id = $empleado_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function getIsPhp(): boolean
    {
        return $this->is_php;
    }

    /**
     * @param boolean   is_php
     * @return Programador
     */
    public function setIsPhp($is_php)
    {
        $this->is_php = $is_php;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNet(): boolean
    {
        return $this->is_net;
    }

    /**
     * @param boolean   is_grafico
     * @return Programador
     */
    public function setIsNet($is_net)
    {
        $this->is_net = $is_net;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPython(): boolean
    {
        return $this->is_python;
    }

    /**
     * @param boolean   is_python
     * @return Programador
     */
    public function setIsPython($is_python)
    {
        $this->is_python = $is_python;
        return $this;
    }

    /**
     * @return integer
     */
    public function getEmpleadoId(): integer
    {
        return $this->empleado_id;
    }

    /**
     * @param integer   empleado_id
     * @return Diseniador
     */
    public function setEmpleadoid($empleado_id)
    {
        $this->empleado_id = $empleado_id;
        return $this;
    }
}
