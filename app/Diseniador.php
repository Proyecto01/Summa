<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class Diseniador extends Empleado
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var boolean
     */
    private $is_grafico;

    /**
     * @var boolean
     */
    private $is_web;

    /**
     * @var integer
     */
    private $empleado_id;




    /**
     * @param boolean             $is_grafico
     * @param boolean             $is_web     
     * @param integer            $empleado_id
     */
    public function __construct(
        string $is_grafico,
        string $is_web,
        integer $empleado_id
    )
    {
        $this->is_grafico = $is_grafico;
        $this->is_web = $is_web;
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
    public function getIsGrafico(): boolean
    {
        return $this->is_grafico;
    }

    /**
     * @param boolean   is_grafico
     * @return Diseniador
     */
    public function setIsGrafico($is_grafico)
    {
        $this->is_grafico = $is_grafico;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWeb(): boolean
    {
        return $this->is_web;
    }

    /**
     * @param boolean   is_grafico
     * @return Diseniador
     */
    public function setIsWeb($is_web)
    {
        $this->is_web = $is_web;
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
