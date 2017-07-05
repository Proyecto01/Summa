<?php
namespace Acme\Repository\Eloquent;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Illuminate\Support\Collection;
use App\Diseniador;
use Acme\Repository\DiseniadorInterface;
use DB;


class DiseniadorRepository extends EntityRepository implements DiseniadorInterface
{

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct(
            $entityManager,
            $entityManager->getClassMetadata(Diseniador::class)
        );
    }

    public function nuevoDiseniador($tipoparams)
    {

        $inserted = DB::table('diseniadors')->insert($tipoparams);
        $msg = "El Diseñador ha sido guardado exitosamente";
        return $msg;
    }

}