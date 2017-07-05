<?php
namespace Acme\Repository;

interface EmpleadoInterface
{
	public function getEmpleados();

    public function nuevoEmpleado($params, $paramstipo);

    public function getEmpleadoById($id);

}