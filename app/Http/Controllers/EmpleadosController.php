<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Acme\Repository\EmpleadoInterface;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    
    
    const PROGRAMADOR = 'programador';
    const DISENIADOR = 'diseniador';
     /**
     * @var EmpleadoInterface
     */
    private $empleadoInterface;

    public function __construct(EmpleadoInterface $empleadoInterface)
    {
        $this->empleadoInterface = $empleadoInterface;
    }  

    public function list()
    {
        $empleados = $this->empleadoInterface->getEmpleados();
        return view('empleados.list')->with('empleados',$empleados);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        }
    
        $msg = $this->empleadoInterface->nuevoEmpleado($params,$paramstipo);
        
        return view('empleados.create', ['successmsg' => $msg]);

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $empleado = $this->empleadoInterface->getEmpleadoById($id);
        return view('empleados.show')->with('empleado',$empleado);
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
