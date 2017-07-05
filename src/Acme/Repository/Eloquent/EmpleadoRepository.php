<?php
namespace Acme\Repository\Eloquent;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Illuminate\Support\Collection;
use App\Empleado;
use App\Programador;
use App\Diseniador;
use App\EmpleadoFactory;
use Acme\Repository\EmpleadoInterface;
use Acme\Repository\ProgramadorInterface;
use Acme\Repository\DiseniadorInterface;
use DB;


class EmpleadoRepository extends EntityRepository implements EmpleadoInterface
{

    const PROGRAMADOR = 'programador';
    const DISENIADOR = 'diseniador';
    private $programadorInterface;
    private $diseniadorInterface;
    private $entityManager;

    public function __construct(DiseniadorInterface $diseniadorInterface,                        ProgramadorInterface $programadorInterface,
                                EntityManager $entityManager)
    {
        $this->programadorInterface = $programadorInterface;
        $this->diseniadorInterface = $diseniadorInterface;
        parent::__construct(
            $entityManager,
            $entityManager->getClassMetadata(Empleado::class)
        );
    }

    public function getEmpleados()
    {
        return new Collection(parent::findAll());
    }

    public function nuevoEmpleado($params, $paramstipo)
    {

        $inserted_id = DB::table('empleados')->insertGetId($params);
        if ($params['tipo'] !== '0') {
            $paramstipo['empleado_id'] = $inserted_id;
            $msg = EmpleadoFactory::empleadoFactoryMethod($this->programadorInterface,
                                                          $this->diseniadorInterface,
                                                          $params['tipo'],
                                                          $paramstipo);
        } else
            $msg = "El empleado ha sigo guardado exitosamente";
        
        return $msg;
    }	

    public function getEmpleadoById($id)
    {
        return $empleado = parent::find($id);
    }
    
}