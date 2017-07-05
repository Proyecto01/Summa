<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Acme\Repository\EmpleadoInterface;
use Acme\Repository\EmpresaInterface;


class EmpresasController extends Controller
{
    
    const PROGRAMADOR = 'programador';
    const DISENIADOR = 'diseniador';

    /**
     * @var EmpresaService
     */
    private $empresaInterface;
    private $empleadoInterface;

    /**
     * @param EmpresaService $empresaService
     */
    
    public function __construct(EmpresaInterface $empresaInterface,     EmpleadoInterface $empleadoInterface)
    {
        $this->empresaInterface = $empresaInterface;
        $this->empleadoInterface = $empleadoInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmpleado(Request $request)
    {
       $empleados = $this->empleadoInterface->getEmpleados();
       dump($empleados->count());
       $this->empresaInterface->addEmpleado();
        return view('empleados.list');
        
    }


    public function createEmpleado(Request $request)
    {
        return view('empleados.create');
    }

    public function storeEmpleado(Request $request)
    {

        $params = ['nombre'   => $request->input('nombre'),
                   'apellido' => $request->input('apellido'),
                   'edad'     => $request->input('edad'),
                   'tipo'     => $request->input('tipo')];
        
        if ($params['tipo'] == self::PROGRAMADOR){
            $paramstipo['is_php'] = $request->input('is_php', 0);
            $paramstipo['is_net'] = $request->input('is_net', 0);
            $paramstipo['is_python'] = $request->input('is_python', 0);
        }elseif ($params['tipo'] == self::DISENIADOR){
            $paramstipo['is_grafico'] = $request->input('is_grafico', 0);
            $paramstipo['is_web'] = $request->input('is_web', 0);
        }else
            $paramstipo = [];
    
        $msg = $this->empleadoInterface->nuevoEmpleado($params,$paramstipo);
        $this->empresaInterface->addEmpleado();
        return view('empleados.create', ['successmsg' => $msg]);

    }

    public function listEmpleados(Request $request)
    {
        $empleados = $this->empleadoInterface->getEmpleados();
        return view('empleados.list')->with('empleados',$empleados);
    }

    public function getPromedioEdad(Request $request)
    {
        $empleados = $this->empleadoInterface->getEmpleados();
        $cant_empleados = $empleados->count();
        $sumatoria = 0;
        foreach ($empleados as $empleado) {
            $sumatoria = $sumatoria + $empleado->getEdad();
        }
        $promedio = $sumatoria / $cant_empleados;
        return view('empleados.promedio')->with('promedio',round($promedio));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
