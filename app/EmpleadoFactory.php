<?php
namespace App;

use App\Programador;
use App\Diseniador;
use Acme\Repository\ProgramadorInterface;
use Acme\Repository\DiseniadorInterface;

class EmpleadoFactory {

	const PROGRAMADOR = 'programador';
	const DISENIADOR = 'diseniador';


    static public function empleadoFactoryMethod($programadorInterface,
    											 $diseniadorInterface,
    											 $tipo,
    											 $paramstipo)
    {
        switch ($tipo) {
            case self::PROGRAMADOR:
                $msg = $programadorInterface->nuevoProgramador($paramstipo);
                break;
            case self::DISENIADOR:
            $msg = $diseniadorInterface->nuevoDiseniador($paramstipo);
                break;
       }
    }	
}