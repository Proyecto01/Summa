<?php
namespace Acme\Repository\Eloquent;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Illuminate\Support\Collection;
use App\Programador;
use Acme\Repository\ProgramadorInterface;
use DB;


class ProgramadorRepository extends EntityRepository implements ProgramadorInterface
{

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct(
            $entityManager,
            $entityManager->getClassMetadata(Programador::class)
        );
    }

    public function nuevoProgramador($tipoparams)
    {

        $inserted = DB::table('programadors')->insert($tipoparams);
        $msg = "El Progamador ha sido guardado exitosamente";
        return $msg;
    }

}