<?php
namespace Acme\Repository\Eloquent;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Illuminate\Support\Collection;
use App\Empresa;
use App\EmpleadoFactory;
use Acme\Repository\EmpleadoInterface;
use Acme\Repository\EmpresaInterface;
use DB;


class EmpresaRepository extends EntityRepository implements EmpresaInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct(
            $entityManager,
            $entityManager->getClassMetadata(Empresa::class)
        );
    }

    public function addEmpleado()
    {
    	DB::table('empresas')->increment('empleados');
    }	
}