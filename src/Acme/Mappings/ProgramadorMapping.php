<?php
namespace Acme\Mappings;

use App\Programador;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class ProgramadorMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Programador::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        $builder->boolean('is_php');
        $builder->boolean('is_net');
        $builder->boolean('is_python');
        $builder->integer('empleado_id');
    }
}

